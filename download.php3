<html><head><title>PHP3 Download</title>
<?

  $title="Download";
  include "include/header.inc";

  $mirror_sites = array(
    "http://ca.php.net/"         => array("canada", "Toronto, Canada"),
    "http://il.php.net/"         => array("israel", "Netvision, Israel"),
    "http://machba.il.php.net/"  => array("israel", "Technion, Israel"),
    "http://no.php.net/"         => array("norway", "Trondheim, Norway")
  );

  $current = "3.0b3";

  echo("<table>\n");

  reset($mirror_sites);
  while ($site = key($mirror_sites)) {
      next($mirror_sites);
      $src_file = "$site\php-$current\.tar.gz";
      $win32_file = "$site\php-$current-win32.zip";
      echo(" <tr>\n");
      echo("  <td>Download ");
      download_link($src_file, "PHP $current source");
      echo(" or ");
      download_link($win32_file, "$current Win32 binary");
      echo(" from " . $mirror_sites[$site][1] . "</td>\n");
      echo('  <td align="center"><a href="' . $src_file . '"><img src="gifs/' .
           $mirror_sites[$site][0] . '.gif" border="0"></a></td>');
      echo("\n </tr>\n");
  }
?>
 <tr>
  <td>
   Download
   <a href="http://www.caraveo.com/php/php-<?echo $current;?>-win32.zip">PHP
   <?echo $current;?> Win32 binary</a> from the United States.  The <a
    href="http://www.caraveo.com/php/php3latest.zip">latest patched
   version</a> may also be downloaded.
  </td>
  <td align="center">
   <a href="http://www.caraveo.com/php/php-3.0b3-win32.zip"><img
    src="gifs/usa.gif" width="100" height="64" border="0"></a>
  </td>
 </tr>
</table>

<?include "include/footer.inc"; ?>
