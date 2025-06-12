// project-root/webpack.config.js
const Encore = require('@symfony/webpack-encore');

Encore
  // katalog, w którym mają się znaleźć pliki build
  .setOutputPath('public/build/')
  // ścieżka, pod którą będą dostępne
  .setPublicPath('/build')

  // jeden punkt wejścia: assets/app.js
  .addEntry('app', './assets/app.js')

  // dzieli wspólne moduły (np. stimulus) na oddzielne pliki
  .splitEntryChunks()
  // generuje jeden runtime.js
  .enableSingleRuntimeChunk()
  // czyści poprzednie buildy
  .cleanupOutputBeforeBuild()
  // source-mapy w dev
  .enableSourceMaps(!Encore.isProduction())
  // hashy w prod
  .enableVersioning(Encore.isProduction())
;

module.exports = Encore.getWebpackConfig();
