<html>
	{{ HTML::style('css/vendor/foundation/foundation.min.css'); }}
	{{ HTML::style('css/vendor/foundation/foundation-icons.css'); }}
	{{ HTML::style('css/styles.css'); }}
	{{ HTML::script('js/vendor/foundation/vendor/jquery.js'); }}
	{{ HTML::script('js/vendor/foundation/foundation.min.js'); }}
    <body>
        <div class="top">
        	<div class="header row">
        		<div class="large-5 large-centered columns">
        			<h1><i class="fi-shopping-cart cartIcon"></i>  eCOM</h1>
        		</div>
        	</div>
            <div class="row container">
                @yield('content')
            </div>
        </div>
        <div class="bot">
            <div class="large-3 large-centered columns">
                <h1></h1>
            </div>
        </div>
    </body>
</html>