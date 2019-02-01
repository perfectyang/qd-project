<template>

  <el-card shadow>
    <h4 style="margin-bottom: 20px">{{ $t('dashboard.sysLog') }}</h4>
    <div style="height: 150px;">
      <el-steps direction="vertical" :active="1">
        <el-step title="发布1.0版本"  @click.native.stop="goViewId(1)"></el-step>
        <el-step title="发布2.0版本"  @click.native.stop="goViewId(2)"></el-step>
        <el-step title="发布3.0版本" description="这是一段很长很长很长的描述性文字"  @click.native.stop="goViewId(3)"></el-step>
      </el-steps>
    </div>
    <router-view></router-view>
  </el-card>

</template>

<script>
export default {
  methods: {
    goViewId (id) {
      this.$router.push({ name: 'world', params: { id } })
    }
  }
}
</script>
