(function(wpI18n, wpBlocks, wpElement, wpEditor, wpComponents) {
  const { __ } = wp.i18n;
  const { registerBlockType } = wp.blocks;

  registerBlockType("rg/gutenberg-block-theme-starter", {
    title: __("Gutenberg Block Theme Starter"),
    icon: "heart",
    category: "common",
    edit() {
      return <p>Static block example built with JSX.</p>;
    },
    save() {
      return <p>Static block example built with JSX.</p>;
    }
  });
})(wp.i18n, wp.blocks, wp.element, wp.editor, wp.components);
