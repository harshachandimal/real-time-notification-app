import * as React from "react";
import Navbar from "./components/navbar/Navbar.tsx";
import UserProfile from "./components/profile/UserProfile.tsx";

const App: React.FC = () => {
  return(
      <>
          <Navbar/>
          <UserProfile/>
      </>


  );
};

export default App;
