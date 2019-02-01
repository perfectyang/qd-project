<template>

  <el-col>
      <el-breadcrumb separator="/" style="margin-bottom: 20px">
        <el-breadcrumb-item :to="{ path: '/' }">Home</el-breadcrumb-item>
        <el-breadcrumb-item>Manage</el-breadcrumb-item>
      </el-breadcrumb>
      <router-view>
      </router-view>
    </el-col>

</template>
