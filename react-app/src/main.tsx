import { createRoot } from "react-dom/client";
import "./index.css";
import App from "./App.tsx";

const reactSection1 = document.getElementById("react_section_1") as HTMLElement;
const reactSection2 = document.getElementById("react_section_2") as HTMLElement;

if (reactSection1)
  createRoot(reactSection1).render(<App sectionId="react_section_1" />);
if (reactSection2)
  createRoot(reactSection2).render(<App sectionId="react_section_2" />);
