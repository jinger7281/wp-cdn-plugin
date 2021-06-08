<script src="https://cdn.bootcdn.net/ajax/libs/angular.js/1.7.8/angular.min.js"></script>
<script>
    var plg_uri = '<?php echo $url; ?>';
</script>
<script src="<?php echo $url . 'assets/js/main.js'; ?>"></script>
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
        <table class="form-table" role="presentation">
            <tr>
                <th>CDN加速域名(url): </th>
                <td><input type="text" ng-model="f.url" placeholder="CDN URL" class="regular-text"></td>
            </tr>
            <tr>
                <th>存储空间名称(Bucket): </th>
                <td><input type="text" ng-model="f.bucket" placeholder="Bucket" class="regular-text"></td>
            </tr>
            <tr>
                <th>AppKey: </th>
                <td><input type="password" ng-model="f.appKey" placeholder="AppKey" class="regular-text strong"></td>
            </tr>
            <tr>
                <th>AppSecret: </th>
                <td><input type="password" ng-model="f.appSecret" placeholder="AppSecret" class="regular-text strong"></td>
            </tr>
            <tr>
                <th>节点名称(EndPoint): </th>
                <td><input type="text" ng-model="f.endPoint" placeholder="例如：z1(七牛)/cn-hangzhou(阿里云)" class="regular-text"></td>
            </tr>
        </table>
        <p class="submit">
            <button class="button button-primary" ng-click="submit()">提交</button>
        </p>
    </div>
</div>