<html>
	<head>
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" type="text/less" href="{{asset('css/style.less')}}">
		<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.7.0/less.min.js"></script>	
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script type="text/javascript" src="{{asset('js/script.js')}}"></script>	
	</head>
    <body>
        <div class="header">
        	<div class='title'>
        		<div class='title_container'>
	        		<div class='title1'>Am I what's wrong with</div>
	        		<div class='title2'>AUSTRALIA</div>
	        	</div>
        	</div>
        </div>

        <div class='navigation'>
        	<div class='navigation_container'>
	        	<div class='nav_button'>{{ link_to_route('home','Home');}}</div>
	        	<div class='nav_button'>{{ HTML::link('topStories', 'Top Stories') }}</div>
                <div class='nav_button'>{{ HTML::link('write', 'Write a Story') }}</div>
	        	
                @if(!Auth::check())
                    <div class='nav_button'>{{ HTML::link('register', 'Register') }}</div>
                    <div class='nav_button'>{{ HTML::link('login', 'Sign In') }}</div>
                @else
                    <div class='nav_button'>{{ HTML::link('user/'.Auth::user()->id, 'My Account') }}</div>
                    <div class='nav_button'>{{ HTML::link('logout', 'Sign Out') }}</div>
                @endif
        	</div>
        </div>

        <div class='main'>

        	<div class='main_content'>
                @if(Session::has('message'))
                    <div class="alert">
                        <p >{{ Session::get('message') }}</p>
                        <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
        		@yield('content')
        	</div>
        </div>

    	<div class = 'footer'>
    		<div class = 'footer_container'>
    			<div class='footer_half'>

    			</div>

    			<div class ='footer_half'>
                        <h2>Contact Us</h2>
    					<div class="contact_form">
                            <input type="text" class="validate" value="Name" rel="Name" id="name"><br>
                            <input type="text" class="validate" value="Email" rel="Email" id="email"><br>
                            <input type="hidden" value="" id="sendto">
                            <textarea rel="Message" class="validate" id="message">Message</textarea><br>
                            <div class="submit">Submit</div>
                        </div>
                        <div class="contact_thanks" style="display:none">
                            Thank You for your interest, we'll be in touch shortly
                        </div>
    			</div>
    		</div>
    	</div>
    </body>
</html>
