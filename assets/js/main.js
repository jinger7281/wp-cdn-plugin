(function(){
    function isEmpty(field) {
        return void 0 === field || '' === field || null === field;
    }
    
    const cdnTypes = ['七牛', '阿里云', '腾讯云'];
    if (void 0 === angular){
        alert('插件加载angular出错');
        return;
    }
    const app = angular.module('cdn-setting', []);
    app.controller('main', function($scope, $http) {
        $scope.cdnTypes = cdnTypes;
        $scope.submit = function() {
            const fieldInputed = $scope.f;
            const fileds = ['appKey', 'appSecret', 'bucket', 'endPoint'];
            if(fieldInputed === void 0) {
                alert('所有配置项不能为空');
            }
            for(let f of fileds) {
                if(!fieldInputed.hasOwnProperty(f)) {
                    alert(f + '不能为空');
                    break;
                }
            }
        }
    });
})()