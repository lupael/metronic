var FormValidation = function () {

    var resetModalFormErrors = function () {
        $('.form-group').removeClass('has-error');
        $('.form-group').find('.help-block').remove();
    }


    // validation using icons
    var ContasValidation = function () {
        // for more info visit the official plugin documentation: 
        // http://docs.jquery.com/Plugins/Validation

        var form2 = $('#form_contas_financeiro');
        var error2 = $('.alert-danger', form2);
        var success2 = $('.alert-success', form2);

        form2.validate({
            errorElement: 'span', //default input error message container
            errorClass: 'help-block help-block-error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            ignore: "",  // validate all fields including form hidden input
            rules: {
                descricao: {
                    required: true
                },
                plano_de_conta_id: {
                    required: true
                },
                centro_de_custo_id: {
                    required: true
                },
                conta_id: {
                    required: true
                },
                pessoa_id: {
                    required: true
                },
                data_emissao: {
                    required: true
                },
                data_vencimento: {
                    required: true
                },
                valor_bruto: {
                    required: true
                },
                desconto: {
                    required: true
                },
                parcelas: {
                    required: true
                },
                repeticao: {
                    required: true
                },
                forma_de_pagamento_id: {
                    required: true
                },
                data_vencimento: {
                    required: true
                },
            },

            invalidHandler: function (event, validator) { //display error alert on form submit
                success2.hide();
                error2.show();
                App.scrollTo(error2, -200);
            },

            errorPlacement: function (error, element) { // render error placement for each input type
                var icon = $(element).parent('.input-icon').children('i');
                icon.removeClass('fa-check').addClass("fa-warning");
                icon.attr("data-original-title", error.text()).tooltip({'container': 'body'});
            },

            highlight: function (element) { // hightlight error inputs
                $(element)
                    .closest('.form-group').removeClass("has-success").addClass('has-error'); // set error class to the control group
            },

            unhighlight: function (element) { // revert the change done by hightlight
                $(element)
                    .closest('.form-group').removeClass('has-error'); // set error class to the control group
            },

            success: function (label, element) {
                var icon = $(element).parent('.input-icon').children('i');
                $(element).closest('.form-group').removeClass('has-error').addClass('has-success'); // set success class to the control group
                icon.removeClass("fa-warning").addClass("fa-check");
            },

            submitHandler: function (form) {
                if($('#result_table tr').length<=1){
                    Swal.fire({
                        'title': '?? necess??rio gerar as parcelas!',
                        'type': "error"
                    });
                    return false;
                };


                App.blockUI();
                success2.show();
                error2.hide();

                form.submit(); // submit the form
            }//
        });

    }

    return {
        //main function to initiate the module
        init: function () {
            ContasValidation();
        }
    };
}();

jQuery(document).ready(function () {
    FormValidation.init();
});