import './bootstrap';
import "../css/app.css";
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter, Routes, Route, Link } from 'react-router-dom';

import { TopPage } from './components/TopPage';
import SignUp from './pages/SignUp';
import Login from './pages/Login';
import { mainListItems, secondaryListItems } from './components/Sidebar';
import { PostPage } from './components/PostPage';

const App = () => {
	const title = "Hello Javascript React";
	return (
		<div id="main">
			<BrowserRouter>
				<Routes>
					<Route path="/" element={<TopPage />} />
					<Route path="/signup" element={<SignUp />} />
					<Route path="/login" element={<Login />} />
					<Route path="/posts" element={<PostPage />} />
				</Routes>
				<div>
					<Link to="/">Top</Link>
					<Link to="/signup">アカウント登録</Link>
					<Link to="/login">ログイン</Link>
				</div>
				<div>
					<mainListItems />
					<secondaryListItems />
				</div>
				{/* <ul>
					<li>
						<Link to="/">Top</Link>
					</li>
					<li>
						<Link href="/signup">アカウント登録</Link>
					</li>
					<li>
						<Link href="/login">ログイン</Link>
					</li>
					<li>
						<Link to="/mypage">MyPage</Link>
					</li>
					<li>
						<Link to="/posts">Post</Link>
					</li>
				</ul> */}
			</BrowserRouter>
		</div>
	);
};

const container = document.getElementById("app");
const root = createRoot(container);
root.render(<App />);