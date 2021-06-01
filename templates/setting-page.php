<script src="https://cdn.bootcdn.net/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
<script src="<?php echo $url.'assets/js/main.js'; ?>"></script>
<style>
    .item {
        margin: 5px;
    }
</style>
<div class="wrap" ng-app="cdn-setting">
    <h1 class="wp-heading-inline">CDN设置</h1>
    <div ng-controller="main">
        <label>CDN服务提供商：</label>
        <select ng-model="cdnType" ng-options="item for item in cdnTypes" ng-init="cdnType='七牛'"></select>
        <table class="for-table" role="presentation">
            <tr>
                <th>AppKey: </th>
                <td><input type="text" ng-model="f.appKey" placeholder="AppKey"></td>
            </tr>
            <tr>
                <th>AppSecret: </th>
                <td><input type="text" ng-model="f.appSecret" placeholder="AppSecret"></td>
            </tr>
            <tr>
                <th>Bucket: </th>
                <td><input type="text" ng-model="f.bucket" placeholder="Bucket"></td>
            </tr>
            <tr>
                <th>EndPoint: </th>
                <td><input type="text" ng-model="f.endPoint" placeholder="EndPoint"></td>
            </tr>
        </table>
        <p class="submit">
            <button class="button button-primary" ng-click="submit()">提交</button>
        </p>
    </div>
</div>