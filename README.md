# Laravel-FormBuilder
A php form precompiler

Make a form from within PHP code.
Example:

	FormBuilder::open_form(['action' => '/post', 'method' => 'post'])

		->formgroup('open')
			->row('open')
				->colmd(12)
					->label(['for' => 'cars'])
						->text('Select a car:')
					->label()
					->select(['name' => 'cars'])
						->option(['value' => 'Volvo'])->text('Volvo')->close()
						->option(['value' => 'Volkswagen'])->text('Volkswagen')->close()
						->option(['value' => 'Bmw'])->text('Bmw')->close()
						->option(['value' => 'Mercedes'])->text('Mercedes')->close()
					->select()
				->colmd()
			->row()
		->formgroup()

		->formgroup('open')
			->label(['for' => 'message'])->text('Tell us about your favorite car:')->close()
			->textarea(['name' => 'message', 'rows' => '5', 'cols' => '20'])
				->text('askjdfh asdfhu sadhf isduhf iushdaf iuhsa ifudhas iuhf isuhf iuashdf usahf iauhads iufh.')
			->textarea()
		->formgroup()

		->button(['type' => 'submit', 'class' => 'btn btn-primary'])->text('Submit')->close();

	FormBuilder::close_form();


Add the pre-compiled form in your blade view by inserting this snippet: @include('formbuilder::insert')
