#!/usr/bin/perl

print "Content-Type: text/html\n\n";

open(HTML,"test.html") or die "Can't open test.html: $!";

while(<HTML>)
{
    print;
}

print "<font color='blue'>";
print "<p><h3>It's a CGI script test</h3>";
print "</body> </html>";
