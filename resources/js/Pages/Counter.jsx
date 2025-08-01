import { usePage } from "@inertiajs/react";
import React, { useState } from "react";

const Counter = () => {
    const page = usePage();
    const [count, setCount] = useState(page.props.count);

    const increment = () => {
        // Logic to increment the counter
        setCount(count + 1);
    };
    const decrement = () => {
        // Logic to decrement the counter
        setCount(count - 1);
    };

    return (
        <div>
            <h1>Counter Component</h1>
            <p>This is a simple counter component.</p>
            <button onClick={increment}>Increment</button>
            <button onClick={decrement}>Decrement</button>
            <p>Current Count: {count}</p>
            <p>Counter functionality will be implemented here.</p>
        </div>
    );
};

export default Counter;
