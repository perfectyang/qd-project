(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["view-report"],{6700:function(t,a,e){"use strict";e.r(a);var r=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("el-col",[e("el-breadcrumb",{staticStyle:{"margin-bottom":"20px"},attrs:{separator:"/"}},[e("el-breadcrumb-item",{attrs:{to:{path:"/"}}},[t._v("Home")]),e("el-breadcrumb-item",[t._v("Report")])],1),e("el-row",{attrs:{gutter:20}},t._l(t.inforCardData,function(a,r){return e("el-col",{key:"infor-"+r,staticStyle:{height:"120px"},attrs:{span:6}},[e("infor-card",{attrs:{shadow:"",color:a.color,icon:a.icon,"icon-size":36}},[e("count-to",{attrs:{end:a.count,"count-class":"count-style"}}),e("p",[t._v(t._s(t.getLangInforTitle(a.title)))])],1)],1)}),1),e("el-row",{staticStyle:{"margin-top":"20px"},attrs:{gutter:20}},[e("el-col",{attrs:{span:8}},[e("el-card",{attrs:{shadow:""}},[e("chart-pie",{staticStyle:{height:"300px"},attrs:{value:t.pieData,text:t.$t("dashboard.userAccess")}})],1)],1),e("el-col",{attrs:{span:16}},[e("el-card",{attrs:{shadow:""}},[e("chart-bar",{staticStyle:{height:"300px"},attrs:{value:t.barData,text:t.$t("dashboard.weekAmountCreation")}})],1)],1)],1),e("el-row",{staticStyle:{"margin-top":"20px"}},[e("el-card",{attrs:{shadow:""}},[e("h4",{staticStyle:{"margin-bottom":"20px"}},[t._v(t._s(t.$t("dashboard.sysLog")))]),e("div",{staticStyle:{height:"150px"}},[e("el-steps",{attrs:{direction:"vertical",active:1}},[e("el-step",{attrs:{title:"发布1.0版本"}}),e("el-step",{attrs:{title:"发布2.0版本"}}),e("el-step",{attrs:{title:"发布3.0版本",description:"这是一段很长很长很长的描述性文字"}})],1)],1)])],1)],1)},o=[],c=e("c9ae"),l=e("5683"),n=e("3692"),s={components:{ChartPie:c["b"],ChartBar:c["a"],CountTo:l["a"],InforCard:n["a"]},data:function(){return{inforCardData:[{title:"newCreation",icon:"md-person-add",count:803,color:"#2d8cf0"},{title:"clickTotal",icon:"md-locate",count:23432,color:"#19be6b"},{title:"newTag",icon:"md-help-circle",count:142,color:"#ff9900"},{title:"shareTotal",icon:"md-share",count:657,color:"#ed3f14"}],pieData:[{value:335,name:"直接访问"},{value:310,name:"邮件营销"},{value:234,name:"联盟广告"},{value:1548,name:"搜索引擎"}],barData:{Mon:13253,Tue:34235,Wed:26321,Thu:12340,Fri:24643,Sat:1322,Sun:1324}}},methods:{getLangInforTitle:function(t){return this.$t("dashboard.".concat(t))}}},i=s,d=e("2877"),u=Object(d["a"])(i,r,o,!1,null,null,null);a["default"]=u.exports},bc59:function(t,a,e){"use strict";e.r(a);var r=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("el-col",[e("el-breadcrumb",{staticStyle:{"margin-bottom":"20px"},attrs:{separator:"/"}},[e("el-breadcrumb-item",{attrs:{to:{path:"/"}}},[t._v("Home")]),e("el-breadcrumb-item",[t._v("Report")])],1),e("el-row",{attrs:{gutter:20}},t._l(t.inforCardData,function(a,r){return e("el-col",{key:"infor-"+r,staticStyle:{height:"120px"},attrs:{span:6}},[e("infor-card",{attrs:{shadow:"",color:a.color,icon:a.icon,"icon-size":36}},[e("count-to",{attrs:{end:a.count,"count-class":"count-style"}}),e("p",[t._v(t._s(t.getLangInforTitle(a.title)))])],1)],1)}),1),e("el-row",{staticStyle:{"margin-top":"20px"},attrs:{gutter:20}},[e("el-col",{attrs:{span:8}},[e("el-card",{attrs:{shadow:""}},[e("chart-pie",{staticStyle:{height:"300px"},attrs:{value:t.pieData,text:t.$t("dashboard.userAccess")}})],1)],1),e("el-col",{attrs:{span:16}},[e("el-card",{attrs:{shadow:""}},[e("chart-bar",{staticStyle:{height:"300px"},attrs:{value:t.barData,text:t.$t("dashboard.weekAmountCreation")}})],1)],1)],1),e("el-row",{staticStyle:{"margin-top":"20px"}},[e("el-card",{attrs:{shadow:""}},[e("h4",{staticStyle:{"margin-bottom":"20px"}},[t._v(t._s(t.$t("dashboard.sysLog")))]),e("div",{staticStyle:{height:"150px"}},[e("el-steps",{attrs:{direction:"vertical",active:1}},[e("el-step",{attrs:{title:"发布1.0版本"}}),e("el-step",{attrs:{title:"发布2.0版本"}}),e("el-step",{attrs:{title:"发布3.0版本",description:"这是一段很长很长很长的描述性文字"}})],1)],1)])],1)],1)},o=[],c=(e("cadf"),e("551c"),e("097d"),e("c9ae")),l=e("5683"),n=e("3692"),s={components:{ChartPie:c["b"],ChartBar:c["a"],CountTo:l["a"],InforCard:n["a"]},data:function(){return{inforCardData:[{title:"newCreation",icon:"md-person-add",count:803,color:"#2d8cf0"},{title:"clickTotal",icon:"md-locate",count:23432,color:"#19be6b"},{title:"newTag",icon:"md-help-circle",count:142,color:"#ff9900"},{title:"shareTotal",icon:"md-share",count:657,color:"#ed3f14"}],pieData:[{value:335,name:"直接访问"},{value:310,name:"邮件营销"},{value:234,name:"联盟广告"},{value:1548,name:"搜索引擎"}],barData:{Mon:13253,Tue:34235,Wed:26321,Thu:12340,Fri:24643,Sat:1322,Sun:1324}}},methods:{getLangInforTitle:function(t){return this.$t("dashboard.".concat(t))}}},i=s,d=e("2877"),u=Object(d["a"])(i,r,o,!1,null,null,null);a["default"]=u.exports}}]);