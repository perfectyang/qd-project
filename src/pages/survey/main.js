import Vue from 'vue'
// 单页组件
import components from './components'
import bootstrap from '@/bootstrap'
import Router from '@/router'
import routes from './routes'
import store from './store'
import App from './App'
// 单页语言配置
import '@/i18n'
// 使用ElementUI
import ElementUI from 'element-ui'
import 'element-ui/lib/theme-chalk/index.css'
Vue.use(ElementUI)

bootstrap({ Router, Component: App, routes, states: store }, app => {
  // 批量注册单页全局组件
  Object.values(components)
    .forEach(component => {
      Vue.component(component.name, component)
    })
})
