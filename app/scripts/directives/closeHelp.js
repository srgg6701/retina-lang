app.directive('closehelp', function(){
    return{
        restrict: 'A',
        replace: true,
        scope: {
            closehelp: '=',
            helpvsbl: '='
        },
        templateUrl: 'app/templates/partials/close-help.html'
    };
});