var timezoneApp  = angular.module('timezoneApp', []);
timezoneApp.controller('timezoneChange',
    function($scope, $http) {
        // ƒ^ƒCƒ€ƒ][ƒ“æ“¾
        $http.get('/angular/api/api_get_timezone_list.php').success(function(data){
            $scope.locales = data;
            $scope.before_locale = 'UTC';
        });

        // Œ»İæ“¾
        now = new Date();
        var year = now.getYear();
        var month = now.getMonth() + 1;
        var day = now.getDate();
        var hour = now.getHours();
        var min = now.getMinutes();
        var sec = now.getSeconds();

        if(year < 2000) {
            year += 1900;
        }
        if(month < 10) {
            month = "0" + month;
        }
        if(day < 10) {
            day = "0" + day;
        }
        if(hour < 10) {
            hour = "0" + hour;
        }
        if(min < 10) {
            min = "0" + min;
        }
        if(sec < 10) {
            sec = "0" + sec;
        }
        $scope.datetime = year + "/" + month + "/" + day + " " + hour + ":" + min + ":" + sec;

        // •ÏŠ·
        $scope.convTime = function($data) {
            $request = 'time=' + $scope.datetime + '&timezone=' + $scope.before_locale;
            $http.get('/angular/api/api_get_conv_time_list.php?' + $request).success(function(data){
                $scope.results = data;
            });
        };

        $scope.isBase = function(flg){
            if(flg==true){
                return "test";
            }
        }
    }





);
