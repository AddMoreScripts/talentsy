import { defineConfig, splitVendorChunkPlugin } from "vite";
import liveReload from "vite-plugin-live-reload";
import path from "path";
import fs from "fs";

export default ({ mode }) => {

  const currentFolder = path.dirname(__filename).split(path.sep).pop();
  if (mode === "development") {
    fs.writeFileSync(`${__dirname}/inc/dev.mode`, "");
  } else {
    try {
      fs.unlinkSync(`${__dirname}/inc/dev.mode`);
    } catch {}
  }

  return defineConfig({
    css: {
      devSourcemap: true,
    },
    plugins: [
      liveReload([
        // edit live reload paths according to your source code
        // for example: __dirname + "/(app|config|views)/**/*.php",
        // using this for our example:
        __dirname + "/**/*.php",
      ]),
      splitVendorChunkPlugin(),
    ],

    base: `/wp-content/themes/${currentFolder}/${mode === 'development' ? '' : 'dist/'}`,
    build: {
      // output dir for production build
      outDir: "./dist",
      emptyOutDir: true,

      // emit manifest so PHP can find the hashed files
      manifest: true,

      // our entry
      rollupOptions: {
        input: path.resolve(__dirname, "js/main.js"),
      },
    },

    server: {
      cors: true,
      strictPort: true,
      port: 3000,
    },
  });
};
