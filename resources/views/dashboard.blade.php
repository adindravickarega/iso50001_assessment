<x-app-layout>


    <style>
        /* Inline CSS for custom background image */
        .background-image {
            background-image: url('/images/2.png');
            background-size: cover; /* Ensure the image covers the entire area */
            background-position: center; /* Center the background image */
            background-repeat: no-repeat; /* Prevent the image from repeating */
        }

        .content {
            background: rgba(255, 255, 255, 0); /* Transparent background */
            color: white; /* White font color */
            font-size: 1.25rem; /* Increase font size */
            line-height: 1.75; /* Increase line height */
        }

        h1 {
            font-size: 2.5rem; /* Increase header font size */
            line-height: 1.2; /* Adjust header line height */
        }

        p, li {
            font-size: 1.25rem; /* Increase paragraph and list item font size */
            line-height: 1.75; /* Adjust paragraph and list item line height */
        }
    </style>

    <div class="py-12 background-image">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           
                
                    <div class="content">
                        
                        <p class="mb-6">Based on the assessment, your organization's readiness level for ISO 50001 certification will be determined and categorized into two main levels:</p>
                        <ul class="list-disc list-inside mb-6">
                            <li class="mb-2"><strong>Basic Readiness:</strong> Scores primarily in the range of 1 to 3. Indicates that while some procedures may be in place, there is significant room for improvement in documentation, control, and consistent implementation.</li>
                            <li><strong>Advanced Readiness:</strong> Scores primarily in the range of 4 to 5. Reflects a higher level of preparedness with well-documented, implemented, and consistently controlled procedures and standards. This level suggests that the organization is closer to meeting ISO 50001 certification requirements.</li>
                        </ul>
                        <p class="mb-6">When completing the questionnaire, each question should be rated on a scale from 1 to 5 based on the following criteria:</p>
                        <ul class="list-decimal list-inside space-y-4 mb-8">
                            <li><strong>1:</strong> There is no officially documented mechanism/procedure/standard requirements, <span style="color: red; font-weight: bold;">not implemented, not controlled.</span></li>
                            <li><strong>2:</strong> There is an officially documented mechanism/procedure/standard requirements that is <span style="color: red; font-weight: bold;">not implemented or controlled.</span></li>
                            <li><strong>3:</strong> <span style="color: red; font-weight: bold;">No</span> officially documented mechanisms/procedures/standard requirements but are implemented and controlled. There are officially documented mechanisms/procedures/standard requirements, implemented, but activities are inconsistent.</li>
                            <li><strong>4:</strong> There are officially documented mechanisms/procedures/standard requirements, implemented, but activities are <span style="color: red; font-weight: bold;">inconsistent.</span></li>
                            <li><strong>5:</strong> There are officially documented mechanisms/procedures/standard requirements, and activities are carried out consistently.</li>
                        </ul>                        
                    </div>
               
                <br><br>
                    <!-- Button positioned at the bottom -->
                <div class="p-8 flex justify-center mt-8">
                    <a href="{{ route('assessment.start') }}" class="inline-block px-1 py-2 bg-red-600 text-white font-semibold rounded-lg hover:bg-green-700 transition duration-300 transform hover:scale-105">
                        Start Your Assessment
                    </a>
                </div>
            
        </div>
    </div>
</x-app-layout>
