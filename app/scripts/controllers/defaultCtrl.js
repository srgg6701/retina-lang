"use strict";

app.controller('defaultCtrl', function($scope, $state, $rootScope, testFactory){
    //console.log('defaultCtrl works, url:', $state.current);
    $rootScope.$on('$stateChangeStart',
        function(event, toState, toParams, fromState, fromParams, options){
            // make page title
            $scope.title = toState.name.charAt(0).toUpperCase() + toState.name.slice(1);
            console.log('event, toState, toParams, fromState, fromParams, options',
            {   event:event, toState:toState, toParams:toParams,
                fromState:fromState, fromParams:fromParams, options:options });

            $scope.section = toState.name;
            if(toState.name=='home'){
            }else{
                $scope.section = toState.name.split('.').pop();
                console.log('$scope.section', $scope.section);
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
    console.log('testFactory', testFactory);
});