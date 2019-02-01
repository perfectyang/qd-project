<template>

  <el-col>
      <el-breadcrumb separator="/" style="margin-bottom: 20px">
        <el-breadcrumb-item :to="{ path: '/' }">Home</el-breadcrumb-item>
        <el-breadcrumb-item>Report</el-breadcrumb-item>
      </el-breadcrumb>
      <el-row :gutter="20">
        <el-col :span="6" v-for="(infor, i) in inforCardData" :key="`infor-${i}`" style="height: 120px;">
          <infor-card shadow :color="infor.color" :icon="infor.icon" :icon-size="36">
            <count-to :end="infor.count" count-class="count-style"/>
            <p>{{ getLangInforTitle(infor.title) }}</p>
          </infor-card>
        </el-col>
      </el-row>
      <el-row :gutter="20" style="margin-top: 20px;">
        <el-col :span="8">
          <el-card shadow>
            <chart-pie style="height: 300px;" :value="pieData" :text="$t('dashboard.userAccess')"></chart-pie>
          </el-card>
        </el-col>
        <el-col :span="16">
          <el-card shadow>
            <chart-bar style="height: 300px;" :value="barData" :text="$t('dashboard.weekAmountCreation')"/>
          </el-card>
        </el-col>
      </el-row>
      <el-row style="margin-top: 20px;">
        <el-card shadow>
          <h4 style="margin-bottom: 20px">{{ $t('dashboard.sysLog') }}</h4>
          <div style="height: 150px;">
            <el-steps direction="vertical" :active="1">
              <el-step title="发布1.0版本"></el-step>
              <el-step title="发布2.0版本"></el-step>
              <el-step title="发布3.0版本" description="这是一段很长很长很长的描述性文字"></el-step>
            </el-steps>
          </div>
        </el-card>
      </el-row>
    </el-col>

</template>

<script>
import { ChartPie, ChartBar } from '@/components/charts'
import CountTo from '@/components/count-to'
import InforCard from '@/components/info-card'
export default {
  components: {
    ChartPie,
    ChartBar,
    CountTo,
    InforCard
  },
  data () {
    return {
      inforCardData: [

        { title: 'newCreation', icon: 'md-person-add', count: 803, color: '#2d8cf0' },
        { title: 'clickTotal', icon: 'md-locate', count: 23432, color: '#19be6b' },
        { title: 'newTag', icon: 'md-help-circle', count: 142, color: '#ff9900' },
        { title: 'shareTotal', icon: 'md-share', count: 657, color: '#ed3f14' }

      ],
      pieData: [
        { value: 335, name: '直接访问' },
        { value: 310, name: '邮件营销' },
        { value: 234, name: '联盟广告' },
        { value: 1548, name: '搜索引擎' }
      ],
      barData: {
        Mon: 13253,
        Tue: 34235,
        Wed: 26321,
        Thu: 12340,
        Fri: 24643,
        Sat: 1322,
        Sun: 1324
      }
    }
  },
  methods: {
    getLangInforTitle (title) {
      return this.$t(`dashboard.${title}`)
    }
  }
}
</script>
