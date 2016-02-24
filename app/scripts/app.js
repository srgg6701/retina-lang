var app = angular.module('App', ['ui.router']);

app.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise("/404");

    $stateProvider
        .state('home',{
            url: "/home",
            templateUrl: 'app/templates/home.html'
        })
        .state('contents',{
            abstract: true,
            templateUrl: 'app/templates/contents.html'
        })
        .state('contents.retina',{
            url: "/retina"
        })
        .state('contents.term',{
            url: "/term"
        })
        .state('contents.text',{
            url: "/text"
        })
        .state('contents.expression',{
            url: "/expression"
        })
        .state('contents.compare',{
            url: "/compare"
        })
        .state('contents.image',{
            url: "/image"
        })
        .state('contents.classify',{
            url: "/classify"
        })
        .state('error',{
            url: "/404",
            templateUrl: "app/templates/404.html"
        });
});