<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="de" lang="de">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link rel="stylesheet" href="css/main.css" type="text/css" media="all" charset="utf-8" />
        <title>File Searcher</title>
    </head>
    <body>
        <div id="nav">
            <ul>
                <li><a href="https://filesearcher.online">Search</a></li>
                <li><a href="https://onemanpublisher.com">Creator</a></li>
            </ul><br class="clf">
        </div>
        <div id="logo" class="typ_cen">
            <img src="https://onemanpublisher.com/img/brand/logo_small_black.png" id="logo-img" alt="File Searcher">
            <h2>File Searcher powered by <a href="https://onemanpublisher.com">onemanpublisher</a></h2>
            <div id="google_search">
                <!-- Search on Google -->
                <form action="https://search.filesearcher.online/index.html?q=<?php echo $_POST['q'];?>&cx=<?php echo $_POST['cx']; ?>&filetype=<?pgp echo $_POST['filetype'];?>" id="cse-search-box" target="_top" method="get">
                    <input type="text" name="q" size="35" />
                    <select name="filetype" id="filetype">
                        <option value="pdf">PDF</option>
                        <option value="xls">XLS</option>
                        <option value="xlsx">XLSX</option>
                        <option value="doc">DOC</option>
                        <option value="docx">DOCX</option>
                        <option value="ppt">PPT</option>
                        <option value="pptx">PPTX</option>
                        <option value="odp">ODP</option>
                        <option value="ods">ODS</option>
                        <option value="odt">ODT</option>
                        <option value="rtf">RTF</option>
                        <option value="txt">TXT</option>
                        <option value="text">TEXT</option>
                        <option value="wpm">WPM</option>
                        <option value="xml">XML</option>
                        <option value="swf">SWF</option>
                        <option value="ps">PS</option>
                        <option value="dwf">DWF</option>
                        <option value="kml">KML</option>
                        <option value="html">HTML</option>
                        <option value="bas">BAS</option>
                        <option value="c">C</option>
                        <option value="cc">CC</option>
                        <option value="cpp">CCP</option>
                        <option value="cxx">CXX</option>
                        <option value="h">H</option>
                        <option value="hpp">HPP</option>
                        <option value="cs">CS</option>
                        <option value="java">JAVA</option>
                        <option value="pl">PL</option>
                        <option value="py">PY</option>
                    </select>
                    <input type="hidden" name="cx" value="011988367539979475703:xenmkplq7rq" />
                    <input type="submit" name="sa" value="Search" />
                    <img src="http://www.google.com/images/poweredby_transparent/poweredby_FFFFFF.gif" alt="Google" />
                </form>
                <!-- Search on Google -->
            </div>
        </div>
    </body>
</html>