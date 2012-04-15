# README for extracallouts recipe #


extracallouts extends the [callout recipe](http://www.pmwiki.org/wiki/Cookbook/Callout) to add additional callouts.

## Obtaining extracallouts ##

You can obtain the extracallouts recipe from the Git repository at:

    http://git.gitorious.org/pmwikistuff/extracallouts.git
  
Create a (temporary) clone of the repository:

    git clone http://git.gitorious.org/pmwikistuff/extracallouts.git
    cd extracallouts
    make dist

Then extract extracallouts.zip into the root of your wiki:

    unzip extracallouts.zip -d /path/to/pmwiki

This will the files into the appropriate subdirectories.

## Installation ##

Add the following line to your local/config.php **after** the include of the callout recipe:

    include_once("$FarmD/cookbook/extracallouts.php");

## Usage ##

The extra callouts include:

* quote

and you use them the same way you'd use the standard callouts:

    >>quote<<
    quoted text
    >><<

in your wiki page.

## Dependencies ##

This recipe assumes you already have the callout recipe loaded.

## Author ##

Tamara Temple <tamara@tamaratemple.com>

