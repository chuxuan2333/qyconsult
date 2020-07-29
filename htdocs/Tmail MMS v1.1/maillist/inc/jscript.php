           <script language=JavaScript type=text/javascript>
function checkNEmail(form) {
	if (isBlank(form.email.value) || isBlank(form.name.value) || !isEmailValid(form.email.value) ) 
	{
		alert("请输入一个有效的昵称或电子邮件地址.\n你输入的昵称或电子邮件格式有误.");
		form.email.focus();
		return false;
	}
	}

function checkEmail(form) {
	if (isBlank(form.email.value) || !isEmailValid(form.email.value) ) {
		alert("请输入一个有效的电子邮件地址.\n你输入的电子邮件格式有误.");
		form.email.focus();
		return false;
	}
return true;

}

function isBlank(fieldValue) {
	var blankSpaces = / /g;
	fieldValue = fieldValue.replace(blankSpaces, "");
	return (fieldValue == "") ? true : false;
}

function isEmailValid(fieldValue) {
	var emailFilter = /^.+@.+\..{2,4}$/;
	var atSignFound = 0;
	for (var i = 0; i <= fieldValue.length; i++)
		if ( fieldValue.charAt(i) == "@" )
			atSignFound++;
	if ( atSignFound > 1 )
		return false;
	else
		return ( emailFilter.test(fieldValue) && !doesEmailHaveInvalidChar(fieldValue) ) ? true : false;
}

function doesEmailHaveInvalidChar(fieldValue) {
	var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\] ]/;
	return ( illegalChars.test(fieldValue) ) ? true : false;
}
</script>