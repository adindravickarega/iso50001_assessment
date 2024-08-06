<style>
        /* Inline CSS for custom background image */
        .background-image {
            background-image: url('/images/2.png');
            background-size: cover; /* Ensure the image covers the entire area */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
            height: 100vh; /* Full viewport height */
            width: 100vw; /* Full viewport width */
            position: absolute; /* Position it absolutely to cover the viewport */
            top: 0;
            left: 0;
            z-index: -1; /* Ensure it stays behind other content */
        }
    </style>

    <!-- Background image section -->
    <div class="background-image"></div>
    
    <!-- Main content -->
    <div class="py-12 relative">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>