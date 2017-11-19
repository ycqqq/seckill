var notify = function () {
    var _notify = function (msg,type) {
        $.notify({message: msg}, {
            // settings
            type: type,
            placement: {
                from: "top",
                align: "center"
            },
            delay: 2500,
            allow_dismiss: false,
            template: '<div data-notify="container"  class="col-xs-11 col-sm-2 alert alert-{0} text-center" ' +
            'role="alert"><span data-notify="message">{2}</span></div>'
        });
    };

    return {
        success: function (msg) {
            _notify(msg, "success")
        },
        info: function (msg) {
            _notify(msg, "info")
        },
        warning: function (msg) {
            _notify(msg, "warning")
        },
        danger: function (msg) {
            _notify(msg, "danger")
        }
    };
}();