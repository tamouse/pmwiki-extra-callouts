OBJECTS=cookbook/extracallouts cookbook/extracallouts.php cookbook/extracallouts/LICENSE.txt cookbook/extracallouts/README.md pub/extracallouts/extracallouts.css pub/extracallouts/quote-2A2AFF.png pub/extracallouts/quote-2AFFD5.png pub/extracallouts/quote-66FF00.png pub/extracallouts/quote-7F2AFF.png pub/extracallouts/quote-C837AB.png pub/extracallouts/quote-D35F5F.png pub/extracallouts/quote-FF7F2A.png pub/extracallouts/quote-black.png pub/extracallouts/quote-grey.png pub/extracallouts/quote.gif pub/extracallouts/quote.svg

INSTALL_DIR=../..

dist: $(OBJECTS)
	/bin/rm extracallouts.zip
	zip -r extracallouts.zip cookbook/ pub/

clean:
	find . -name '*~' -print -delete

install: extracallouts.zip
	unzip extracallouts.zip -d $(INSTALL_DIR)
