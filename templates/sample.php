<?php /* Template name: Sample */ ?>

<?php get_header( null, [ 'render_template' => false ] ) ?>

<main class="sample-page | container">

	<div class="clr-fix-16"></div>

	<section>
		<div class="section-title">
			<h1>light mode</h1>
		</div>

		<div>

			<input type="radio"
				   id="theme-light-mode"
				   name="themeSwitcher"
				   class="form-check"
				   value="light">
			<label for="theme-light-mode">light</label>

			<input type="radio"
				   id="theme-dark-mode"
				   class="form-check"
				   name="themeSwitcher"
				   value="dark">
			<label for="theme-dark-mode">dark</label>

		</div>
	</section>

	<div class="clr-fix-16"></div>

	<section>
		<div class="section-title">
			<h1>دکمه ها</h1>
		</div>

		<div class="d-flex gap-16">
			<a href="#"
			   class="btn-primary">btn-primary</a>
			<a href="#"
			   class="btn-default">btn-default</a>

			<a href="#"
			   class="btn-secondary">btn-secondary</a>
		</div>

	</section>

	<div class="clr-fix-24"></div>


	<div class="section-title">
		<h1>کانتینر</h1>
	</div>

	<div class="full-width bg-warning  p-8 text-left">

		<div class="">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, maxime ea deserunt suscipit quos sint
			tempora quia consectetur cupiditate, labore praesentium fuga adipisci veniam eligendi? Eius error natus quis
			alias non quas neque atque eos illum rerum unde architecto ut suscipit dolores tenetur blanditiis iste,
			doloremque cum dolore! Vero, quam?
		</div>

	</div>

	<div class="clr-fix-8"></div>


	<div class="full-width bg-primary container p-8 text-left">

		<div class="">
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, maxime ea deserunt suscipit quos sint
			tempora quia consectetur cupiditate, labore praesentium fuga adipisci veniam eligendi? Eius error natus quis
			alias non quas neque atque eos illum rerum unde architecto ut suscipit dolores tenetur blanditiis iste,
			doloremque cum dolore! Vero, quam?
		</div>

	</div>

	<div class="clr-fix-8"></div>


	<div class="breakout p-8 bg-accent text-left">
		<div>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, maxime ea deserunt suscipit quos sint
			tempora quia consectetur cupiditate, labore praesentium fuga adipisci veniam eligendi? Eius error natus quis
			alias non quas neque atque eos illum rerum unde architecto ut suscipit dolores tenetur blanditiis iste,
			doloremque cum dolore! Vero, quam?
		</div>

	</div>

	<div class="clr-fix-8"></div>

	<div class="container p-8 bg-success text-left">
		<div>
			Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure, maxime ea deserunt suscipit quos sint
			tempora quia consectetur cupiditate, labore praesentium fuga adipisci veniam eligendi? Eius error natus quis
			alias non quas neque atque eos illum rerum unde architecto ut suscipit dolores tenetur blanditiis iste,
			doloremque cum dolore! Vero, quam?
		</div>
	</div>

	<div class="clr-fix-24"></div>



	<section>

		<div class="section-title">
			<h1>ستون ها</h1>
		</div>


		<h2>12 Column</h2>

		<div class="box-col-12 gap-8">
			<div class="col-span-4 p-4 bg-primary">col-span-4</div>
			<div class="col-span-4 p-4 bg-primary">col-span-4</div>
			<div class="col-span-4 p-4 bg-primary">col-span-4</div>

			<div class="col-span-6 p-4 bg-accent text-accent-100">col-span-6</div>
			<div class="col-span-6 p-4 bg-accent text-accent-100">col-span-6</div>

			<div class="col-span-3 p-4 bg-primary">col-span-3</div>
			<div class="col-span-3 p-4 bg-primary">col-span-3</div>
			<div class="col-span-3 p-4 bg-primary">col-span-3</div>
			<div class="col-span-3 p-4 bg-primary">col-span-3</div>

			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
			<div class="col-span-2 p-4 bg-accent text-accent-100">col-span-2</div>
		</div>


		<div class="clr-fix-16"></div>

		<h2>3 Column</h2>
		<div class="box-col-3 gap-12">
			<div class="col-span-2 p-4 bg-primary">col-span-2</div>
			<div class="col-span-1 p-4 bg-accent text-accent-100">col-span-1</div>
		</div>

		<div class="clr-fix-16"></div>



	</section>

	<div class="clr-fix-24"></div>

	<section>

		<div class="section-title">
			<h1>تایپوگرافی</h1>
		</div>

		<div class="fs-title">Title</div>
		<div class="fs-title-sm">Title small</div>

		<h1>heading 1</h1>
		<h2>heading 2</h2>
		<h3>heading 3</h3>
		<h4>heading 4</h4>
		<h5>heading 5</h5>
		<h6>heading 6</h6>

		<div class="clr-fix-8"></div>

		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore sunt, praesentium corporis incidunt iusto
			hic.</p>

		<div class="clr-fix-8"></div>

		<p class="fs-body-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error odit, quasi
			architecto
			itaque eos nostrum.</p>
		<div class="clr-fix-8"></div>

		<span class="fs-caption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid, vitae.</span>
	</section>

	<div class="clr-fix-24"></div>

	<section>

		<div class="section-title">
			<h1>رنگ ها</h1>
		</div>

		<div class="clr-fix-16"></div>


		<h2>primary</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-primary-100 p-8">100</div>
			<div class="flex-1 bg-primary-200 p-8">200</div>
			<div class="flex-1 bg-primary-300 p-8">300</div>
			<div class="flex-1 bg-primary-400 p-8">400</div>
			<div class="flex-1 bg-primary p-8">500</div>
			<div class="flex-1 bg-primary-600 p-8">600</div>
			<div class="flex-1 bg-primary-700 p-8">700</div>
			<div class="flex-1 bg-primary-800 p-8">800</div>
			<div class="flex-1 bg-primary-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>


		<h2>secondary</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-secondary-100 p-8">100</div>
			<div class="flex-1 bg-secondary-200 p-8">200</div>
			<div class="flex-1 bg-secondary-300 p-8">300</div>
			<div class="flex-1 bg-secondary-400 p-8">400</div>
			<div class="flex-1 bg-secondary p-8">500</div>
			<div class="flex-1 bg-secondary-600 p-8">600</div>
			<div class="flex-1 bg-secondary-700 p-8">700</div>
			<div class="flex-1 bg-secondary-800 p-8">800</div>
			<div class="flex-1 bg-secondary-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>


		<h2>accent</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-accent-100 p-8">100</div>
			<div class="flex-1 bg-accent-200 p-8">200</div>
			<div class="flex-1 bg-accent-300 p-8">300</div>
			<div class="flex-1 bg-accent-400 p-8">400</div>
			<div class="flex-1 bg-accent p-8">500</div>
			<div class="flex-1 bg-accent-600 p-8">600</div>
			<div class="flex-1 bg-accent-700 p-8">700</div>
			<div class="flex-1 bg-accent-800 p-8">800</div>
			<div class="flex-1 bg-accent-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>

		<h2>success</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-success-100 p-8">100</div>
			<div class="flex-1 bg-success-200 p-8">200</div>
			<div class="flex-1 bg-success-300 p-8">300</div>
			<div class="flex-1 bg-success-400 p-8">400</div>
			<div class="flex-1 bg-success p-8">500</div>
			<div class="flex-1 bg-success-600 p-8">600</div>
			<div class="flex-1 bg-success-700 p-8">700</div>
			<div class="flex-1 bg-success-800 p-8">800</div>
			<div class="flex-1 bg-success-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>


		<h2>warning</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-warning-100 p-8">100</div>
			<div class="flex-1 bg-warning-200 p-8">200</div>
			<div class="flex-1 bg-warning-300 p-8">300</div>
			<div class="flex-1 bg-warning-400 p-8">400</div>
			<div class="flex-1 bg-warning p-8">500</div>
			<div class="flex-1 bg-warning-600 p-8">600</div>
			<div class="flex-1 bg-warning-700 p-8">700</div>
			<div class="flex-1 bg-warning-800 p-8">800</div>
			<div class="flex-1 bg-warning-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>


		<h2>error</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-error-100 p-8">100</div>
			<div class="flex-1 bg-error-200 p-8">200</div>
			<div class="flex-1 bg-error-300 p-8">300</div>
			<div class="flex-1 bg-error-400 p-8">400</div>
			<div class="flex-1 bg-error p-8">500</div>
			<div class="flex-1 bg-error-600 p-8">600</div>
			<div class="flex-1 bg-error-700 p-8">700</div>
			<div class="flex-1 bg-error-800 p-8">800</div>
			<div class="flex-1 bg-error-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>

		<h2>info</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-info-100 p-8">100</div>
			<div class="flex-1 bg-info-200 p-8">200</div>
			<div class="flex-1 bg-info-300 p-8">300</div>
			<div class="flex-1 bg-info-400 p-8">400</div>
			<div class="flex-1 bg-info p-8">500</div>
			<div class="flex-1 bg-info-600 p-8">600</div>
			<div class="flex-1 bg-info-700 p-8">700</div>
			<div class="flex-1 bg-info-800 p-8">800</div>
			<div class="flex-1 bg-info-900 p-8">900</div>
		</div>

		<div class="clr-fix-16"></div>

		<h2>natural</h2>
		<div class="d-flex gap-8">
			<div class="flex-1 bg-natural-100 p-8">100</div>
			<div class="flex-1 bg-natural-200 p-8">200</div>
			<div class="flex-1 bg-natural-300 p-8">300</div>
			<div class="flex-1 bg-natural-400 p-8">400</div>
			<div class="flex-1 bg-natural p-8">500</div>
			<div class="flex-1 bg-natural-600 p-8">600</div>
			<div class="flex-1 bg-natural-700 p-8">700</div>
			<div class="flex-1 bg-natural-800 p-8">800</div>
			<div class="flex-1 bg-natural-900 p-8">900</div>
		</div>

	</section>

	<div class="clr-fix-24"></div>

	<section>
		<div class="section-title">
			<h1>سایه ها</h1>
		</div>


		<div class="box-col-6 gap-16">

			<div class="shadow | p-16 col-span-1">shadow</div>
			<div class="shadow-sm | p-16 col-span-1">shadow-sm</div>

		</div>
	</section>

	<div class="clr-fix-24"></div>


	<section>
		<div class="section-title">
			<h1>فرم ها</h1>
		</div>


		<div class="box-col-3 gap-8 ai-end">

			<input type="text"
				   name=""
				   id=""
				   class="form-control"
				   placeholder="no-label">


			<div class="input-label">
				<label for="">
					demo label
					<input type="text"
						   name=""
						   id=""
						   class="form-control"
						   placeholder="demo-label">

				</label>
			</div>

			<div class="input-group">
				<button class="btn-default iconsax"
						icon-name="search-normal-2"></button>
				<input type="text"
					   class="form-control"
					   variant="inside-group"
					   placeholder="with-icon">
			</div>

		</div>

		<div class="clr-fix-8"></div>

		<select name=""
				id=""
				class="form-select">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		</select>

		<div class="clr-fix-8"></div>

		<div class="box-col-4 gap-8">
			<div>
				<input id="x030"
					   type="checkbox"
					   class="form-check">
				<label for="x030">لیبل یک</label>
			</div>

			<div>
				<input id="x040"
					   type="checkbox"
					   class="form-check"
					   disabled>
				<label for="x040">لیبل یک</label>
			</div>

			<div>
				<input id="x031"
					   type="radio"
					   name="y03"
					   class="form-check">
				<label for="x031">لیبل یک</label>
			</div>

			<div>
				<input id="x032"
					   type="radio"
					   name="y03"
					   class="form-check">
				<label for="x032">لیبل یک </label>
			</div>
		</div>

	</section>

	<div class="clr-fix-24"></div>

	<section>
		<div class="section-title">
			<h1>responsive</h1>
		</div>

		<h2>grids</h2>
		<div class="box-col-12 gap-12">
			<div class="col-span-4 col-span-md-6 col-span-sm-12 bg-primary p-4">
				col-span-4 col-span-md-6 col-span-sm-12
			</div>
			<div class="col-span-4 col-span-md-6 col-span-sm-12 bg-primary p-4">
				col-span-4 col-span-md-6 col-span-sm-12
			</div>
			<div class="col-span-4 col-span-md-12 col-span-sm-12 bg-accent text-accent-100 p-4">
				col-span-4 col-span-md-12 col-span-sm-12
			</div>
		</div>

		<div class="clr-fix-24"></div>

		<h2>displays</h2>

		<div>
			<div class="p-4 bg-primary d-block d-md-none">d-block d-md-none</div>
			<div class="p-4 bg-secondary d-none d-md-block">d-none d-md-block</div>
		</div>

		<div class="clr-fix-24"></div>


		<h2>grid auto fit</h2>

		<div class="grid-auto-fit-225 gap-8">
			<div class="bg-success p-16"></div>
			<div class="bg-success p-16"></div>
			<div class="bg-success p-16"></div>
		</div>


	</section>



	<div class="clr-fix-16"></div>


</main>

<?php get_footer( null, [ 'render_template' => false ] ) ?>