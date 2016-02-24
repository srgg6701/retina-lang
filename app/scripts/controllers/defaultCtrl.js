"use strict";

app.controller('defaultCtrl', function($scope, $state, $rootScope){

    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.section = toState.name.split('.').pop(); //console.log('section', $scope.section);
            // make page title
            $scope.title = $scope.section.charAt(0).toUpperCase() + $scope.section.slice(1);
            if(toState.name=='home'){
            }else{
                switch ($scope.section) {
                    case 'retina':

                        break;
                    case 'term':

                        break;
                    case 'text':

                        break;
                    case 'expression':

                        break;
                    case 'compare':

                        break;
                    case 'image':

                        break;
                    case 'classify':

                        break;
                }
            }

        });
});
app.controller('contentsCtrl', function($scope, $rootScope, selects){
    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            $scope.section = toState.name.split('.').pop();
            $scope.select = selects[$scope.section];
        });
});