# Web Based Python Compiler using Docker

A simple web-based python compiler that takes python code as input and runs it in a background docker container, then displays the output on the web-interface. 

### How To Run

Since I used PHP for the web interface, you'll have to use Xampp or something similar to start the web-compiler. If you're using Xampp, follow the steps given below:

1. Clone this repo to the htdocs folder in your Xampp installation folder.
2. Run Xampp and start the Apache server.
3. In your browser, go to `localhost/Project2-Phase1/web-interface.php`
4. Write your python code in the text area provided and click the `Get Output` button to run the code.
5. The output should appear in the region below the text-area and button.

This compiler can only compile basic python code for now, and will fail if the code requires libraries that need to be installed with pip. I haven't tested it for really long outputs and they might cause a problem.
