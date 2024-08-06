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
            background: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            color: white; /* White font color */
            font-size: 1.25rem; /* Increase font size */
            line-height: 1.75; /* Increase line height */
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        h1 {
            font-size: 2.5rem; /* Increase header font size */
            line-height: 1.2; /* Adjust header line height */
            background: rgba(0, 0, 255, 0.7); /* Semi-transparent background */
            color: white; /* White font color */
        }

        li {
            font-size: 0.75rem; /* Increase paragraph and list item font size */
            line-height: 1.75; /* Adjust paragraph and list item line height */
        }

        .criteria ul {
            font-size: 0.875rem; /* Reduce font size for list items */
            line-height: 1.5; /* Adjust line height for list items */
            margin-top: 0; /* Remove space between paragraph and list */
        }

        .question-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .question {
            flex: 1;
        }

        .options {
            display: flex;
            gap: 0.5rem;
        }

        .options input[type="radio"] {
            display: none;
        }

        .options label {
            background: #444;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .options input[type="radio"]:checked + label {
            background: #007bff;
        }

        .button-container {
            text-align: center;
            margin-top: 2rem;
        }

        .button-container a {
            display: inline-block;
            padding: 1rem 2rem;
            background: #007bff;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            text-decoration: none;
            transition: background 0.3s, transform 0.3s;
        }

        .button-container a:hover {
            background: #0056b3;
            transform: scale(1.05);
        }
    </style>

    <div class="py-12 background-image">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
                
                    <div class="content">
                        <h1 class="font-bold mb-4">LEADERSHIP</h1>
                        
                        <ul class="list-decimal list-inside space-y-1 mb-2" style="font-size: 0.875rem; line-height: 1.25;">
                            <p>Criteria:</p>
                            <li><strong>1:</strong> There is <span style="color: red; font-weight: bold;">no</span> officially documented mechanism/procedure/standard requirements, <span style="color: red; font-weight: bold;">not implemented, not controlled.</span></li>
                            <li><strong>2:</strong> There is an officially documented mechanism/procedure/standard requirements that is <span style="color: red; font-weight: bold;">not implemented or controlled.</span></li>
                            <li><strong>3:</strong> <span style="color: red; font-weight: bold;">No</span> officially documented mechanisms/procedures/standard requirements but are implemented and controlled. There are officially documented mechanisms/procedures/standard requirements, implemented, but activities are inconsistent.</li>
                            <li><strong>4:</strong> There are officially documented mechanisms/procedures/standard requirements, implemented, but activities are <span style="color: red; font-weight: bold;">inconsistent.</span></li>
                            <li><strong>5:</strong> There are officially documented mechanisms/procedures/standard requirements, and activities are carried out consistently.</li>
                        </ul>
                        <br>
                        <div class="question-section">
                            <div class="question">
                                <p>1. Has the Organisation determined internal and external issues, stakeholder expectations, and needs relevant to the continuous improvement of energy performance and energy management systems? This includes risk analysis and identification.</p>
                            </div>
                            <div class="options">
                                <input type="radio" id="q1-1" name="q1" value="1">
                                <label for="q1-1">1</label>
                                <input type="radio" id="q1-2" name="q1" value="2">
                                <label for="q1-2">2</label>
                                <input type="radio" id="q1-3" name="q1" value="3">
                                <label for="q1-3">3</label>
                                <input type="radio" id="q1-4" name="q1" value="4">
                                <label for="q1-4">4</label>
                                <input type="radio" id="q1-5" name="q1" value="5">
                                <label for="q1-5">5</label>
                            </div>
                        </div>
                        <div class="question-section">
                            <div class="question">
                                <p>2. Does the organisation define interested parties relevant to energy performance and the Energy Management System (EnMS), understand their requirements, and ensure ownership of access to and implementation of applicable legal requirements related to energy efficiency, utilisation and consumption, and regularly review these requirements?</p>
                            </div>
                            <div class="options">
                                <input type="radio" id="q2-1" name="q2" value="1">
                                <label for="q2-1">1</label>
                                <input type="radio" id="q2-2" name="q2" value="2">
                                <label for="q2-2">2</label>
                                <input type="radio" id="q2-3" name="q2" value="3">
                                <label for="q2-3">3</label>
                                <input type="radio" id="q2-4" name="q2" value="4">
                                <label for="q2-4">4</label>
                                <input type="radio" id="q2-5" name="q2" value="5">
                                <label for="q2-5">5</label>
                            </div>
                        </div>
                        <div class="question-section">
                            <div class="question">
                                <p>3. Does the organisation define the scope of the EnMS by considering external and internal issues, stakeholder requirements, and ensuring the authority and scope to regulate the efficiency, utilisation and consumption of all types of energy?</p>
                            </div>
                            <div class="options">
                                <input type="radio" id="q3-1" name="q3" value="1">
                                <label for="q3-1">1</label>
                                <input type="radio" id="q3-2" name="q3" value="2">
                                <label for="q3-2">2</label>
                                <input type="radio" id="q3-3" name="q3" value="3">
                                <label for="q3-3">3</label>
                                <input type="radio" id="q3-4" name="q3" value="4">
                                <label for="q3-4">4</label>
                                <input type="radio" id="q3-5" name="q3" value="5">
                                <label for="q3-5">5</label>
                            </div>
                        </div>
                    </div>
                
                <!-- Button positioned at the bottom -->
                <div class="p-8 flex justify-center mt-8">
                    <div class="button-container">
                        <a href="{{ route('assessment.nextSection') }}">Next Section</a>
                    </div>
                </div>
            
        </div>
    </div>
</x-app-layout>
