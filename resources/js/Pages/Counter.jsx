const Counter = () => {
    const count = usePage().props.count;
    return (
        <div>
            <h1>Counter Component</h1>
            <p>This is a simple counter component.</p>
            <button>Increment</button>
            <button>Decrement</button>
            <p>Current Count: {count}</p>
            <p>Counter functionality will be implemented here.</p>
        </div>
    );
};
