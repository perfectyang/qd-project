const glob = require('glob')
const path = require('path')
const resolve = folder => path.resolve(__dirname, folder)
const VUE_APP_ALLOW_ENTRY = process.env.VUE_APP_ALLOW_ENTRY || ''
// 多页面入口路径
const PAGE_PATH = resolve('src/pages')
const envconfig = require('./envconfig')
/**
 * 获取多页面配置对象
 */
const rewrites = []
function getPagesConfig (entry) {
  const pages = {}
  // 规范中定义每个单页文件结构
  // index.html,main.js,App.vue
  let allPage = glob.sync(PAGE_PATH + '/*/main.js')
  allPage.forEach(filePath => {
    const pageName = path.basename(path.dirname(filePath))
    if (entry && entry !== pageName) return
    pages[pageName] = {
      entry: filePath,
      // 除了首页，其他按第二级目录输出
      // 浏览器中直接访问/news,省去/news.html
      fileName: `${pageName}.html`,
      template: path.dirname(filePath) + '/index.html',
      // inject: true,
      chunks: ['vue-common', 'element-ui', 'echarts', 'vendors', 'manifest', pageName]
    }
    rewrites.push({
      from:  new RegExp(`^/${pageName}`),
      to: `/${pageName}.html`
    })
  })
  return pages
}

/**
 * 样式预处理器全局变量资源插件
 * @param {String} rule webpack 规则
 */
function addStyleResource (rule) {
  rule.use('style-resource')
    .loader('style-resources-loader')
    .options({
      patterns: [
        resolve('./src/assets/less/var.less')
      ]
    })
}
// console.log('VUE_APP_ALLOW_ENTRY', VUE_APP_ALLOW_ENTRY)
const pages = getPagesConfig(VUE_APP_ALLOW_ENTRY)

module.exports = {

  // 多页配置
  pages: {
    ...pages,
    // ,
    // 手动设置单页
  },

  // 自定义webpack配置
  configureWebpack: {
    cache: true,
    plugins: [],
    performance: {
      hints: false
    },
    optimization: {
      runtimeChunk: process.env.NODE_ENV === 'production' ? { name: 'manifest' } : false,
      splitChunks: {
        automaticNameDelimiter: '--',
        cacheGroups: {
          vendors: {
            name: 'vendors',
            chunks: 'initial',
            test: /[\\/]node_modules[\\/]/,
            priority: 2
          },
          vue: {
            name: 'vue-common',
            test: (module) => {
              return /vue|axios/g.test(module.context)
            },
            chunks: 'initial',
            priority: 10
          },
          'element-ui': {
            name: 'element-ui',
            test: module => /element-ui/g.test(module.context),
            chunks: 'initial',
            priority: 10
          },
          echarts: {
            name: 'echarts',
            test: module => /echarts/g.test(module.context),
            chunks: 'initial',
            priority: 10
          }
        }
      }
    }
  },

  // 扩展webpack配置
  chainWebpack: config => {
    // 移除 prefetch 插件
    config.plugins.delete('prefetch')
    config.plugins.delete('preload')
    Object.keys(pages).forEach(page => {
      config.plugins.delete(`preload-${page}`)
      config.plugins.delete(`prefetch-${page}`)
    })

    config.resolve
      .alias
      .set('vue$', resolve('./node_modules/vue/dist/vue.common.js'))
      .set('assets', resolve('src/assets'))
      .set('components', resolve('src/components'))
      .set('I18n', resolve('src/i18n'))
      .set('View', resolve('src/view'))
      .set('Lib', resolve('src/lib'))
      .set('API', resolve('src/lib/services'))

    // 添加 css 全局变量资源插件
    const types = ['vue-modules', 'vue', 'normal-modules', 'normal']
    types.forEach(
      type => addStyleResource(config.module.rule('less').oneOf(type))
    )
  },

  // 开发服务器配置
  devServer: {
    port: `8081`,
    proxy: {
      '/mock': {
        target: 'https://easy-mock.com/mock/5ba83adde786c911a33a5090',
        changeOrigin: true,
        secure: false,
        pathRewrite: {
          '/mock': ''
        }
      }
    },
    historyApiFallback: {
     rewrites: rewrites
    }
  },
  publicPath: process.env.NODE_ENV === 'production' ? envconfig.publicPath : '/',
  assetsDir: envconfig.assetsDir,
  productionSourceMap: false,
  filenameHashing: false,
  // 样式
  // css: {
  //   loaderOptions: {}
  // }

  // 插件配置
  pluginOptions: {
  }
}
