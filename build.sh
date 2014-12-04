#!/usr/bin/env bash

ls plugins/*/ -d | while read plugindir; do
    readmefile="${plugindir}README.md"
    pluginname=$(basename $plugindir)
    pandoc -s --from markdown_github --to html5 --standalone "$readmefile" --output "docs/${pluginname}.html" -c "../assets/github.css"
done
