## Starting with PHP

**Starting with PHP** is a PHP workshop targeted at beginners. The audience are generally expected to have obtained basic programming skills, but with/without a solid background in web development.

## Slides

<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vRFDhtYayQyFt8tGaA0jiKhoGNqjUQbqJOZnqsINFy9cdi9fehEuwq4P8D9o1u9KLmJEcLEXpZ9l-yD/embed?start=false&loop=false&delayms=60000"  id="powerpoint" frameborder="0" height="500" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" style="position: relative; width: 100%;"></iframe>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
		var width = document.getElementById('powerpoint').getBoundingClientRect().width;
		var height = width / 1280 * 749;
		document.getElementById('powerpoint').style.height = "" + height + "px";
	});
</script>

## Setup Instructions

- Download the latest version of Bitnami WAPP/MAPP/LAPP with PHP 7.1.x
	- Windows: [https://bitnami.com/stack/wapp/installer](https://bitnami.com/stack/wapp/installer)
	- Mac OS: [https://bitnami.com/stack/mapp/installer](https://bitnami.com/stack/mapp/installer)
	- Linux: [https://bitnami.com/stack/lapp/installer](https://bitnami.com/stack/lapp/installer)
- Clone the project into your local disk using SSH
```bash
git clone git@github.com:yunpengn/StartingWithPHP.git
```
or HTTPS
```bash
git clone https://github.com/yunpengn/StartingWithPHP.git
```
or simply click the "Download ZIP" at [https://github.com/yunpengn/StartingWithPHP](https://github.com/yunpengn/StartingWithPHP).
- _Append_ the following content to `C:\WAPP\apache2\conf\bitnami\bitnami-apps-prefix.conf`.<br>(_This guide assumes you are using WAPP and have installed it to the C Drive. Please change the path accordingly if this is not the case._)
```
Include "C:/WAPP/apps/StartingWithPHP/conf/httpd-prefix.conf"
```

## Licence

This repository is under [GNU General Public Licence 3.0](LICENSE).

You have the freedom to distribute copies of any content within this repository, **if and only if**, under the same licence. In other words, you must make sure that these copies are also free and open source.

Also, anything provided here is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
