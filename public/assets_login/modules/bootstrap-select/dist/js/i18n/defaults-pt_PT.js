/*!
 * Bootstrap-select v1.13.7 (https://developer.snapappointments.com/bootstrap-select)
 *
 * Copyright 2012-2019 SnapAppointments, LLC
 * Licensed under MIT (https://github.com/snapappointments/bootstrap-select/blob/master/LICENSE)
 */

(function (root, factory) {
  if (root === undefined && window !== undefined) root = window;
  if (typeof define === 'function' && define.amd) {
    // AMD. Register as an anonymous module unless amdModuleId is set
    define(["jquery"], function (a0) {
      return (factory(a0));
    });
  } else if (typeof module === 'object' && module.exports) {
    // Node. Does not work with strict CommonJS, but
    // only CommonJS-like environments that support module.exports,
    // like Node.
    module.exports = factory(require("jquery"));
  } else {
    factory(root["jQuery"]);
  }
}(this, function (jQuery) {

(function ($) {
  $.fn.selectpicker.defaults = {
    noneSelectedText: 'Nenhum seleccionado',
    noneResultsText: 'Sem resultados contendo {0}',
    countSelectedText: 'Selecionado {0} de {1}',
    maxOptionsText: ['Limite ultrapassado (máx. {n} {var})', 'Limite de seleções ultrapassado (máx. {n} {var})', ['itens', 'item']],
    multipleSeparator: ', ',
    selectAllText: 'Selecionar Tudo',
    deselectAllText: 'Desmarcar Todos'
  };
})(jQuery);


}));
//# sourceMappingURL=defaults-pt_PT.js.map
