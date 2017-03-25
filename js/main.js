// Page load

function page_load(page)
{
	// All
	setTimeout(function()
	{
		if($('#content_div').css('opacity') == 0)
		{
			notify('Loading...', 300);
		}
	}, 500);

	// Individual
	if(page == 'reservation')
	{
		setTimeout(function()
		{
			if($('#reservation_table_div').is(':hidden'))
			{
				notify('Loading...', 300);
			}
		}, 500);
	}	
	else if(page == 'week')
	{
		setTimeout(function()
		{
			if($('#reservation_table_div').css('opacity') == 0)
			{
				notify('Loading...', 300);
			}
		}, 500);
	}
}

function page_loaded(page)
{
	// All
	$.get('main.php?day_number', function(data)
	{
		if(data != global_day_number)
		{
			notify('Day have changed. Refreshing...', '300');
			setTimeout(function() { window.location.replace('.'); }, 2000);
		}
	});

	setTimeout(function()
	{
		if($('#notification_inner_cell_div').is(':visible') && $('#notification_inner_cell_div').html() == 'Loading...')
		{
			notify();
		}
	}, 1000);

	// read_reservation_details();

	// Individual
	if(page == 'about')
	{
		$('#about_latest_version_p').html('<img src="img/loading.gif" alt="Loading"> Getting latest version...');

		setTimeout(function()
		{
			$.get('main.php?latest_version', function(data)
			{
				if($('#about_latest_version_p').length)
				{
					$('#about_latest_version_p').html(data);
				}
			});
		}, 1000);
	}
}

//Login

function login(){
	var user_email = $('#user_email_input').val();
	var user_password = $('#user_password_input').val();

	$('#login_message_p').html('<img src="img/loading.gif" alt="Loading"> Logging in..').slideDown('fast');

	var remember_me_checkbox = $('#remember_me_checkbox').prob('checked');

	if(remember_me_checkbox){
		var user_remember = 1;
	}
	else{
		var user_remember = 0;
	}
	$.post('login.php?login', { user_email: user_email, user_password: user_password, user_remember: user_remember}, function(data)
		{
			if(data == 1)
		{
			input_focus();
			setTimeout(function() { window.location.replace('.'); }, 1000);
		}
		else
		{
			if(data == '')
			{
				$('#login_message_p').html('<span class="error_span">Wrong email and/or password</span>');
				$('#user_email_input').val('');
				$('#user_password_input').val('');
				input_focus('#user_email_input');
			}
			else
			{
				$('#login_message_p').html(data);
			}
		}
		});

}

// Logout page

function logout()
{
	notify('Logging out...', 300);
	$.get('login.php?logout', function(data) { setTimeout(function() { window.location.replace('.'); }, 1000); });
}

// Functions

function showdashboard()
{
	page_load();
	div_hide('#content_div');
	$.get('dashboardv2.php', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });	
}

//Patient
function show_patient()
{
	page_load();
	div_hide('#content_div');
	$.get('patient.php?', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}
function addnew_patient()
{
	page_load();
	div_hide('#content_div');
	$.get('patient.php?new_patient', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}

//Doctor
function show_doctor()
{
	page_load();
	div_hide('#content_div');
	$.get('doctor.php', function(data){ $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}

function addnew_doctor()
{
	page_load();
	div_hide('#content_div');
	$.get('doctor.php?new_doctor', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}

//Employee
function show_employee()
{
	page_load();
	div_hide('#content_div');
	$.get('employee.php', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}

function addnew_employee()
{
	page_load();
	div_hide('#content_div');
	$.get('employee.php?new_employee', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

//Item
function show_item()
{
	page_load();
	div_hide('#content_div');
	$.get('item.php', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function show_solditem()
{
	page_load();
	div_hide('#content_div');
	$.get('item.php?sold_item', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function show_purchaseditem()
{
	page_load();
	div_hide('#content_div');
	$.get('item.php?purchased_item', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function addnew_item()
{
	page_load();
	div_hide('#content_div');
	$.get('item.php?new_item', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function show_historyrequestitem()
{
	page_load();
	div_hide('#content_div');
	$.get('item.php?historyrequest_item', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

//Supplier
function show_supplier()
{
	page_load();
	div_hide('#content_div');
	$.get('supplier.php?', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function addnew_supplier()
{
	page_load();
	div_hide('#content_div');
	$.get('supplier.php?new_supplier', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

//Consignment
function show_incomitemcons()
{

}

function show_outcomitemcons()
{

}

function addnew_itemcons()
{

}

//Floor Stock
function show_floorstock()
{

}

//payment
function paymentpatient()
{
	page_load();
	div_hide('#content_div');
	$.get('paymentpatient.php', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}

function patient_payment_form()
{
	var id_patient = $('#id_patient').val();
	$.post('paymentpatient.php?show_patient', { id_patient: id_patient}, function(data) 
		{$('#content_div').html(data); div_fadein('#content_div'); page_loaded();});
}

function testpage()
{
	page_load();
	div_hide('#content_div');
	$.get('test.php', function(data) { $('#content_div').html(data); div_fadein('#content_div'); page_loaded(); });
}



// Login page

function showlogin()
{
	page_load();
	div_hide('#content_div');

	$.get('login.php', function(data)
	{
		$('#content_div').html(data); 
		div_fadein('#content_div');
		page_loaded();

		var user_email = $('#user_email_input').val();
		var user_password = $('#user_password_input').val();

		if(user_email != '' && user_password != '')
		{
			setTimeout(function() { $('#login_form').submit(); }, 250);
		}
		else
		{
			input_focus('#user_email_input');
		}
	});
}

// UI

function div_fadein(id)
{
	setTimeout(function()
	{
		if(global_css_animations == 1)
		{
			$(id).addClass('div_fadein');
		}
		else
		{
			$(id).animate({ opacity: 1 }, 250);
		}
	}, 1);
}

function div_hide(id)
{
	$(id).removeClass('div_fadein');
	$(id).css('opacity', '0');
}

function notify(text, time)
{
	if(typeof text != 'undefined')
	{
		if(typeof notify_timeout != 'undefined')
		{
			clearTimeout(notify_timeout);
		}

		$('#notification_inner_cell_div').css('opacity', '1');

		if($('#notification_div').is(':hidden'))
		{
			$('#notification_inner_cell_div').html(text);
			$('#notification_div').slideDown('fast');
		}
		else
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_inner_cell_div').html(text); $('#notification_inner_cell_div').animate({ opacity: 1 }, 250); });
		}

		notify_timeout = setTimeout(function() { $('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); }); }, 1000 * time);
	}
	else
	{
		if($('#notification_div').is(':visible'))
		{
			$('#notification_inner_cell_div').animate({ opacity: 0 }, 250, function() { $('#notification_div').slideUp('fast'); });
		}
	}
}

function input_focus(id)
{
	if(offclick_event == 'touchend')
	{
		$('input').blur();
	}
	if(typeof id != 'undefined')
	{
		$(id).focus();
	}
}

// Hash change

function hash()
{
	var hash = window.location.hash.slice(1);

	if(hash == '')
	{
		showdashboard();			
		 //if(typeof session_logged_in != 'undefined')
		 //{
		 //	showdashboard();			
		 //}
		 //else
		 //{
		 //	showlogin();
		 //}
	}
	else
	{
		if(hash == 'paymentpatient')
		{
			paymentpatient();
			
		}
		else if(hash == 'showpatient')
		{
			show_patient();
		}
		else if(hash == 'addpatient')
		{
			addnew_patient();
		}
		else if(hash == 'showdoctor')
		{
			show_doctor();
		}
		else if(hash == 'adddoctor')
		{
			addnew_doctor();
		}
		else if(hash == 'listemployee')
		{
			show_employee();
		}
		else if(hash == 'addemployee')
		{
			addnew_employee();
		}
		else if(hash == 'listitem')
		{
			show_item();
		}
		else if(hash == 'solditem')
		{
			show_solditem();
		}
		else if(hash == 'purchaseditem')
		{
			show_purchaseditem();
		}
		else if(hash == 'additem')
		{
			addnew_item();
		}
		else if(hash == 'historyrequestitem')
		{
			show_historyrequestitem();
		}
		else if(hash == 'listsupplier')
		{
			show_supplier();
		}
		else if(hash == 'addsupplier')
		{
			addnew_supplier();
		}
		else if(hash == 'incomingitemcons')
		{
			show_incomitemcons();
		}
		else if(hash == 'outcomingitemcons')
		{
			show_outcomitemcons();
		}
		else if(hash == 'additemcons')
		{
			addnew_itemcons();
		}
		else if(hash == 'floorstock')
		{
			show_floorstock();
		}
		else if(hash == 'test')
		{
			testpage();
		}
	}
};

// Document ready

$(document).ready( function()
{
	// Forms
	$(document).on('submit', '#login_form', function() { login(); return false; });
	$(document).on('submit', '#system_configuration_form', function() { save_system_configuration(); return false; });
	$(document).on('submit', '#patient_payment_form', function() { patient_payment_form(); return false; });
});
// Window load

$(window).load(function()
{
	// Make sure cookies are enabled
	$.cookie(global_cookie_prefix+'_cookies_test', '1');
	var test_cookies_cookie = $.cookie(global_cookie_prefix+'_cookies_test');

	if(test_cookies_cookie == null)
	{
		window.location.replace('error.php?error_code=3');
	}
	else
	{
		$.cookie(global_cookie_prefix+'_cookies_test', null);

		hash();

		$(window).bind('hashchange', function ()
		{
			hash();
		});
	}
});

// Settings

$(document).ready( function()
{
	$.ajaxSetup({ cache: false });
});
