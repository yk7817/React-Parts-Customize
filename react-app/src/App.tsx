import "./App.css";
import type { SectionIdType } from "./types/types";

function App({ sectionId }: SectionIdType) {
  return (
    <>
      {sectionId === "react_section_1" && <p>セクション1です</p>}
      {sectionId === "react_section_2" && <p>セクション2です</p>}
    </>
  );
}

export default App;
