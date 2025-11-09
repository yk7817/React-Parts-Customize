import { defineConfig } from "vite";
import react from "@vitejs/plugin-react";
import path from "path";

// https://vite.dev/config/
export default defineConfig({
  plugins: [react()],
  build: {
    outDir: path.resolve(__dirname, "assets"),
    emptyOutDir: true,
    rollupOptions: {
      input: "./src/main.tsx",
      output: {
        entryFileNames: "js/[name].js",
        chunkFileNames: "js/[name].js",
        assetFileNames: ({ name }) => {
          if (name && name.endsWith(".css")) {
            return "css/[name]";
          }
          return "assets/[name]";
        },
      },
    },
  },
});
