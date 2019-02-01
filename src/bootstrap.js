/**
 * 页面初始化函数
 * by www.kuaizi.ai
 * http://www.kuaizi.ai
 */

// css reset
import 'normalize.css'
import Vue from 'vue'
import i18n from '@/i18n'
import Store from './store'
import components from './components'
export default ({ Router, Component, routes, states = {}, options }, resolve = () => {}) => {
  // 批量注册组件
  Object.values(components)
    .forEach(component => {
      Vue.component(component.name, component)
    })

  const store = Store(states)

  // 绑定路由
  const router = Router ? Router(store, routes, options) : {}

  // 动态加载当前语言包
  store.dispatch('setSystemLanguage', Vue.config.lang)
    .then(res => {
      // 创建单页实例
      const app = new Vue({
        el: '#app',
        render: h => h(Component),
        store,
        router,
        i18n
      })

      // 回调函数
      resolve(app)
    })

  // const app = new Vue({
  //   el: '#app',
  //   render: h => h(Component),
  //   store,
  //   router,
  //   i18n
  // })

  // // 回调函数
  // resolve(app)
}
