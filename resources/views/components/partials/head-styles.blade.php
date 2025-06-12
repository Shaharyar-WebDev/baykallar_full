<style>
        :root {
            --electric-blue: #0077ff;
            --cool-gray: #f3f4f6;
            --dark-gray: #1f2937;
            --light-gray: #e5e7eb;
        }
        
        body {
            font-family: 'Exo 2', sans-serif;
            background-color: #f9fafb;
        }

        .btn {
            cursor: pointer
        }
        
        .futuristic-logo {
            font-family: 'Orbitron', sans-serif;
            letter-spacing: 1px;
        }
        
        .nav-link {
            position: relative;
            padding-bottom: 4px;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--electric-blue);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .cart-badge {
            position: absolute;
            top: -6px;
            right: -6px;
            background: #ff3b30;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        
        .search-input {
            transition: all 0.3s ease;
        }
        
        .search-input:focus {
            box-shadow: 0 0 0 3px rgba(0, 119, 255, 0.2);
        }
        
        .hamburger div {
            height: 3px;
            background: var(--dark-gray);
            margin: 5px 0;
            transition: all 0.3s ease;
        }
        
        .hamburger.active div:first-child {
            transform: rotate(45deg) translate(5px, 5px);
        }
        
        .hamburger.active div:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active div:last-child {
            transform: rotate(-45deg) translate(5px, -5px);
        }
         
    </style>