"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_producto_Crear_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=script&lang=js":
/*!********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=script&lang=js ***!
  \********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "crear-producto",
  data: function data() {
    return {
      producto: {
        nombre: "",
        precio: "",
        cantidad: "",
        categoria: "",
        descripcion: "",
        imagen: ""
      }
    };
  },
  methods: {
    crear: function crear() {
      var _this = this;

      this.axios.post('/api/producto', this.producto).then(function (response) {
        _this.$router.push({
          name: "mostrarProductos"
        });
      })["catch"](function (error) {
        console.log('error');
      });
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa":
/*!************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa ***!
  \************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "container"
};

var _hoisted_2 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createStaticVNode)("<div class=\"mb-3\"><label class=\"form-label\" for=\"nombre\">Nombre</label><input type=\"text\" name=\"nombre\" class=\"form-control\"></div><div class=\"mb-3\"><label class=\"form-label\" for=\"precio\">Precio</label><input type=\"text\" name=\"precio\" class=\"form-control\"></div><div class=\"mb-3\"><label class=\"form-label\" for=\"cantidad\">Cantidad</label><input type=\"text\" name=\"cantidad\" class=\"form-control\"></div><div class=\"mb-3\"><label class=\"form-label\" for=\"categoria\">Categoria</label><select name=\"categoria\" class=\"form-select\"><option selected>Elije una categoria</option><option value=\"accion\">Accion</option><option value=\"terror\">Terror</option><option value=\"aventura\">Aventura</option></select></div><div class=\"mb-3\"><label class=\"form-label\" for=\"descripcion\">Descripcion</label><textarea name=\"descripcion\" class=\"form-control\"></textarea></div><div class=\"mb-3\"><label class=\"form-label\" for=\"imagen\">Imagen</label><input type=\"file\" name=\"imagen\" class=\"form-control\"></div><button type=\"submit\" class=\"btn btn-primary\">Guardar</button>", 7);

var _hoisted_9 = [_hoisted_2];
function render(_ctx, _cache, $props, $setup, $data, $options) {
  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("form", {
    onSubmit: _cache[0] || (_cache[0] = (0,vue__WEBPACK_IMPORTED_MODULE_0__.withModifiers)(function () {
      return $options.crear && $options.crear.apply($options, arguments);
    }, ["prevent"]))
  }, _hoisted_9, 32
  /* HYDRATE_EVENTS */
  )]);
}

/***/ }),

/***/ "./resources/js/components/producto/Crear.vue":
/*!****************************************************!*\
  !*** ./resources/js/components/producto/Crear.vue ***!
  \****************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Crear_vue_vue_type_template_id_f921fbfa__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Crear.vue?vue&type=template&id=f921fbfa */ "./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa");
/* harmony import */ var _Crear_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Crear.vue?vue&type=script&lang=js */ "./resources/js/components/producto/Crear.vue?vue&type=script&lang=js");
/* harmony import */ var C_xampp_htdocs_Proyecto1_ecommerce_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_xampp_htdocs_Proyecto1_ecommerce_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Crear_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Crear_vue_vue_type_template_id_f921fbfa__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/producto/Crear.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/producto/Crear.vue?vue&type=script&lang=js":
/*!****************************************************************************!*\
  !*** ./resources/js/components/producto/Crear.vue?vue&type=script&lang=js ***!
  \****************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Crear_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Crear_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Crear.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Crear_vue_vue_type_template_id_f921fbfa__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Crear_vue_vue_type_template_id_f921fbfa__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Crear.vue?vue&type=template&id=f921fbfa */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/producto/Crear.vue?vue&type=template&id=f921fbfa");


/***/ })

}]);