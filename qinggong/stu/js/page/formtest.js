 
function test(selectform)
{
  
	var validate = selectform.validate({
		rules:{
			idCard:"isIdCardNo",
			state:"required",
			stu_class:"required",
			stu_birthday1:"required",
			stu_birthday2:"required",
			gender:"required",
			period1:"required",
			major:"required",
			phoneNum:{isTel:true},
			household:"required",
			familyPopulation: {  digits: true },
			homeAddress:"required",
			politicalAppearance:"required",
			postalCode:"isZipCode",
			hometown:{maxlength:16,
				minlength:4},
			sourceOfIncome:"required",
			totalMonthlyIncome:{  digits: true },
			name11:{
				maxlength:10,
				minlength:2 },
			name12:"required",
			name13:"required",
			name14:"required",
			name21:{
				maxlength:10,
				minlength:2 },		
			name22:"required",
			name23:"required",
			name24:"required",
		    apply_grade:"required",
			family_intro:{
				minlength:50 },
			applyreason:{
				minlength:50 },
			text:{
				minlength:50 },
				
			ranking1:{
				maxlength:10,
				minlength:2 },	
			Com_Course:{
				 digits: true 
				
				},
			ranking2:{
				maxlength:10,
				minlength:2 },	
			pass_num:{
				 digits: true 
				
				},
			reson:{
					minlength:50 
				},
		},
		messages:{
			idCard:{
				required:"身份证号不能为空！"
			},
			gender:"请选择性别！",
			politicalAppearance:"请选择政治面貌！",
			name12:{
				number:"年龄须为数字！"
			},

			
		
		},
		errorPlacement: function(error, element) {
			if ( element.is(":radio") )
				error.appendTo ( element.parent() );
			else if ( element.is(":checkbox") )
				error.appendTo ( element.parent() );
			else if ( element.is("input[name=captcha]") )
				error.appendTo ( element.parent() );
			else
				error.insertAfter(element);
		},
	    success: function(label) {
		   label.html("&nbsp;").addClass("right_mess");
	    }			  
	});	
	
}
