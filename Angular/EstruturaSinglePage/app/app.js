var app = angular.module('app', ['ngRoute']);

app.config(function($routeProvider, $locationProvider) {
    // $routeProvider utilizado para configurar as rotas
    // $locationProvider define o padrão de como chamamos o deep-linking

    // Remove o # da URL
    $locationProvider.html5Mode(true);

    $routeProvider
    .when('/', {
        templateUrl: 'app/views/home.html',
        controller: 'HomeCtrl'
    })
    .when('/sobre', {
        templateUrl: 'app/views/sobre.html',
        controller: 'SobreCtrl'
    })
    .when('/contato', {
        templateUrl: 'app/views/contato.html',
        controller: 'ContatoCtrl'
    })
    .otherwise({
        redirectTo: '/'
    });

});
