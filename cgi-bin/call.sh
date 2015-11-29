#!/bin/bash
# Runs the cgi-script, using the shell, using 'get' results from the index html form we parse it to the options in the python script.

echo "Content-type: text/html"
echo ""

PATH="/opt/local/bin:/opt/local/sbin:/opt/local/bin:/opt/local/sbin:/usr/local/git/bin:/sw/bin/:/usr/local/bin:/usr/local/:/usr/local/sbin:/usr/local/mysql/bin:/Library/Frameworks/Python.framework/Versions/3.4/bin:/Users/mhenes/.node/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin/"
export $PATH

echo '<html>'
echo '<head>'
echo '<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">'

echo '<title></title>'
echo '</head>'
echo '<body>'
query=`echo "$QUERY_STRING" | sed -n 's/^.*query=\([^&]*\).*$/\1/p' | sed "s/%20/ /g"`
pages=`echo "$QUERY_STRING" | sed -n 's/^.*pages=\([^&]*\).*$/\1/p' | sed "s/%20/ /g"`
output_name=`echo "$QUERY_STRING" | sed -n 's/^.*output_name=\([^&]*\).*$/\1/p' | sed "s/%20/ /g"`
email_address=`echo "$QUERY_STRING" | sed -n 's/^.*email_address=\([^&]*\).*$/\1/p' | sed "s/%20/ /g"`
echo '<h1>'
echo 'Running...'
echo '</h1>'
DIR=$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )
cd "$DIR"
python main.py -query $query -pages $pages -o $output_name
echo ''

echo '</body>'
echo '</html>'
