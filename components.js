/* inicialização de componentes jquery */

$('.mpmg_datepicker').datepicker({
    format: "dd/mm/yyyy",
    language: "pt-BR",
    clearBtn: true,
    todayHighlight: true
});

$('.mpmg_datetimepicker').datetimepicker({
	format: "dd/mm/yyyy hh:ii",
    language: "pt-BR",
    todayHighlight: true
    });

$(".mpmg_select").select2();


$('.mpmg_mask_cpf').inputmask('999.999.999-99');
$('.mpmg_mask_cpf').maxlength=14;

//$('.mpmg_mask_cnpj').inputmask('99.999.999/9999-99');
$('.mpmg_mask_cnpj').inputmask('99999999/9999-99');
$('.mpmg_mask_cnpj').maxlength=16;

$('.mpmg_mask_cep').inputmask('99999999');
$('.mpmg_mask_cep').maxlength=8;

$('.mpmg_mask_date').inputmask('99/99/9999');
$('.mpmg_mask_date').maxlength=10;

$('.mpmg_mask_datetime').inputmask('99/99/9999 99:99');
$('.mpmg_mask_datetime').maxlength=16;

$('.mpmg_autocomplete').each( function() {
	   var $input = $(this);
	   
	   // Create a hidden input with the same form control name to submit the value.
	   var controlName = $input.attr('name');
	   var controlNameId = $input.attr('name').replace('.','');
	   var $visible = $("#cod_"+controlNameId);
	   var $hidden = $('<input type="hidden"/>').attr('name', controlName);

	   var $hiddenId = $("#id_"+controlNameId);
	   
	   //if visible exists then use it instead
	   if($visible.length > 0) {
	   		$hidden = $visible;
	   	//	$input.attr('name',controlName+"_label");
	   }else {
		   $input.after($hidden).attr('name', controlName + '_label');
	   }
	   

	   //Inicializacao
	   var initId = $input.data('init-id-value');
	   var initNome = $input.data('init-nome-value');

		if(initId) {
			$hidden.val(initId);
		}

		if(initNome) {
			$input.val(initNome);
		}
	   
	 //Response status
	 //  var responseId = $input.data('id-status');

	   
	   // Set-up the autocomplete widget.
	   var serverUrl = $input.data('url');
	   $(this).autocomplete({

			 search: function () {
			        $("#response_"+controlName).attr("class","mpmg_autocomplete_image fa fa-spinner");
			  },
			  
			 response: function () {
				 	$("#response_"+controlName).attr("class","mpmg_autocomplete_image fa fa-ellipsis-v");
			   },
	      source: serverUrl,
	      focus: function(event, ui) {
	         // Set the text input value to the focused item's label, instead of the value.
	         $input.val(ui.item.label);
	         $hidden.val(ui.item.value);

			 if(ui.item.id) {
				if($hiddenId.length>0) {
					$hiddenId.val(ui.item.id);
				}
			 }
	         
	         return false;
	      },
	      select: function(event, ui) {
	    	 $("#response_"+controlName).attr("class","mpmg_autocomplete_image fa fa-check");
	         // Save the selection item and value in the two inputs.
	         $input.val(ui.item.label);
	         $hidden.val(ui.item.value);

			 if(ui.item.id) {
					if($hiddenId.length>0) {
						$hiddenId.val(ui.item.id).trigger('change');
					}
			}
	         
	         var $nextField = $input.closest('.form-group').nextAll(".form-group").first().find(":input:not([type=hidden])").first();
     		 $nextField.focus();
	         
	         return false;
	      },
	      delay: 700 
	   });
	});
