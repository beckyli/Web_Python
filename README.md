HTML Form Interface to be GUI for the Google-EmailScraper.
User fills out the form on the index.php webpage,
after submitting the form, a shell script is called,
to run the python Google-EmailScraper script.
This script then runs with the form data passed along.
The results are then saved to a file.
This could be used as a Web Service on a local server.

Google-EmailScraper
===================

This is a scraper that searches Google based on a query and scrapes all
emails found on each page Google finds.

Requirements
------------
* Python 2.6+
* apache2 installed and running
* unix/bash/shell (Linux or Unix OS)
* cgi-enabled (edit httpd.conf and configured this also load cgi-bin module)
* php5 enabled (edit httpd.conf and load module)
* Advisible to make a Sites directory in the User directory if on Mac OS X and point your cgi-bin directory there in your httpd.conf file.
* Make sure the correct permissions are granted to the files in the localhost directory for it to be able to run.

Instructions
------------
To use this scraper, you'll need to run main.py with Python and pass in
the following arguments

* -query (this is what we're telling Google to search for)
* -pages (number of Google search results pages we should scrape)
* -o     (output filename) 

Example
-------
```
python main.py -query "adoption agency email" -pages 10 -o emails.csv
```
