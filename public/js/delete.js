/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/delete.js":
/*!********************************!*\
  !*** ./resources/js/delete.js ***!
  \********************************/
/***/ (() => {

eval("$(function () {\n  $('.delete').click(function () {\n    var _this = this;\n\n    Swal.fire({\n      title: 'Czy na pewno chcesz usunąć zaznaczony rekord?',\n      text: \"Jest to nieodwracalna zmiana!\",\n      icon: 'warning',\n      showCancelButton: true,\n      confirmButtonColor: '#3085d6',\n      cancelButtonColor: '#d33',\n      confirmButtonText: 'Tak, usuwamy to!',\n      cancelButtonText: 'Nie, zachowaj to!'\n    }).then(function (result) {\n      if (result.isConfirmed) {\n        $.ajax({\n          method: \"DELETE\",\n          url: deleteUrl + $(_this).data(\"id\")\n        }).done(function (response) {\n          window.location.reload();\n        }).fail(function (response) {\n          Swal.fire('Ups', 'coś poszło nie tak', 'error');\n        });\n      }\n    });\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyIkIiwiY2xpY2siLCJTd2FsIiwiZmlyZSIsInRpdGxlIiwidGV4dCIsImljb24iLCJzaG93Q2FuY2VsQnV0dG9uIiwiY29uZmlybUJ1dHRvbkNvbG9yIiwiY2FuY2VsQnV0dG9uQ29sb3IiLCJjb25maXJtQnV0dG9uVGV4dCIsImNhbmNlbEJ1dHRvblRleHQiLCJ0aGVuIiwicmVzdWx0IiwiaXNDb25maXJtZWQiLCJhamF4IiwibWV0aG9kIiwidXJsIiwiZGVsZXRlVXJsIiwiZGF0YSIsImRvbmUiLCJyZXNwb25zZSIsIndpbmRvdyIsImxvY2F0aW9uIiwicmVsb2FkIiwiZmFpbCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvZGVsZXRlLmpzPzZjMTEiXSwic291cmNlc0NvbnRlbnQiOlsiJChmdW5jdGlvbigpIHtcbiAgICAkKCcuZGVsZXRlJykuY2xpY2soZnVuY3Rpb24oKXtcbiAgICAgICAgICAgIFN3YWwuZmlyZSh7XG4gICAgICAgICAgICAgICAgdGl0bGU6ICdDenkgbmEgcGV3bm8gY2hjZXN6IHVzdW7EhcSHIHphem5hY3pvbnkgcmVrb3JkPycsXG4gICAgICAgICAgICAgICAgdGV4dDogXCJKZXN0IHRvIG5pZW9kd3JhY2FsbmEgem1pYW5hIVwiLFxuICAgICAgICAgICAgICAgIGljb246ICd3YXJuaW5nJyxcbiAgICAgICAgICAgICAgICBzaG93Q2FuY2VsQnV0dG9uOiB0cnVlLFxuICAgICAgICAgICAgICAgIGNvbmZpcm1CdXR0b25Db2xvcjogJyMzMDg1ZDYnLFxuICAgICAgICAgICAgICAgIGNhbmNlbEJ1dHRvbkNvbG9yOiAnI2QzMycsXG4gICAgICAgICAgICAgICAgY29uZmlybUJ1dHRvblRleHQ6ICdUYWssIHVzdXdhbXkgdG8hJyxcbiAgICAgICAgICAgICAgICBjYW5jZWxCdXR0b25UZXh0OiAnTmllLCB6YWNob3dhaiB0byEnXG4gICAgICAgICAgICAgIH0pLnRoZW4oKHJlc3VsdCkgPT4ge1xuICAgICAgICAgICAgICAgIGlmIChyZXN1bHQuaXNDb25maXJtZWQpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAkLmFqYXgoe1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICBtZXRob2Q6IFwiREVMRVRFXCIsXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgIHVybDogZGVsZXRlVXJsICsgJCh0aGlzKS5kYXRhKFwiaWRcIilcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgXG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAuZG9uZShmdW5jdGlvbihyZXNwb25zZSkge1xuICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICB3aW5kb3cubG9jYXRpb24ucmVsb2FkKCk7XG4gICAgICAgICAgICAgICAgICAgICAgICAgICAgfSlcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAuZmFpbChmdW5jdGlvbiAocmVzcG9uc2UpIHtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgU3dhbC5maXJlKCdVcHMnLCAnY2/FmyBwb3N6xYJvIG5pZSB0YWsnLCAnZXJyb3InKTtcbiAgICAgICAgICAgICAgICAgICAgICAgICAgICB9KTtcbiAgICAgICAgICAgICAgICB9XG4gICAgICAgICAgICAgIH0pIDsgICAgIFxuICAgICAgICB9KTtcbiAgICB9KTsiXSwibWFwcGluZ3MiOiJBQUFBQSxDQUFDLENBQUMsWUFBVztFQUNUQSxDQUFDLENBQUMsU0FBRCxDQUFELENBQWFDLEtBQWIsQ0FBbUIsWUFBVTtJQUFBOztJQUNyQkMsSUFBSSxDQUFDQyxJQUFMLENBQVU7TUFDTkMsS0FBSyxFQUFFLCtDQUREO01BRU5DLElBQUksRUFBRSwrQkFGQTtNQUdOQyxJQUFJLEVBQUUsU0FIQTtNQUlOQyxnQkFBZ0IsRUFBRSxJQUpaO01BS05DLGtCQUFrQixFQUFFLFNBTGQ7TUFNTkMsaUJBQWlCLEVBQUUsTUFOYjtNQU9OQyxpQkFBaUIsRUFBRSxrQkFQYjtNQVFOQyxnQkFBZ0IsRUFBRTtJQVJaLENBQVYsRUFTS0MsSUFUTCxDQVNVLFVBQUNDLE1BQUQsRUFBWTtNQUNsQixJQUFJQSxNQUFNLENBQUNDLFdBQVgsRUFBd0I7UUFDWmQsQ0FBQyxDQUFDZSxJQUFGLENBQU87VUFDSEMsTUFBTSxFQUFFLFFBREw7VUFFSEMsR0FBRyxFQUFFQyxTQUFTLEdBQUdsQixDQUFDLENBQUMsS0FBRCxDQUFELENBQVFtQixJQUFSLENBQWEsSUFBYjtRQUZkLENBQVAsRUFLQ0MsSUFMRCxDQUtNLFVBQVNDLFFBQVQsRUFBbUI7VUFDckJDLE1BQU0sQ0FBQ0MsUUFBUCxDQUFnQkMsTUFBaEI7UUFDSCxDQVBELEVBUUNDLElBUkQsQ0FRTSxVQUFVSixRQUFWLEVBQW9CO1VBQ3RCbkIsSUFBSSxDQUFDQyxJQUFMLENBQVUsS0FBVixFQUFpQixvQkFBakIsRUFBdUMsT0FBdkM7UUFDSCxDQVZEO01BV1g7SUFDRixDQXZCSDtFQXdCSCxDQXpCTDtBQTBCQyxDQTNCSixDQUFEIiwiZmlsZSI6Ii4vcmVzb3VyY2VzL2pzL2RlbGV0ZS5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/delete.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/delete.js"]();
/******/ 	
/******/ })()
;