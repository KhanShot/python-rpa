window.wpym = {
    ec: new YmEc(),
    counters: [],
    targets: [],
};

jQuery(function($) {
    const {targets, counters} = window.wpym;

    for (const target of targets) {
        $(target.selector).on(target.event, () => {
            counters.forEach(counter => {
                ym(counter.number, 'reachGoal', target.target);
            });
        })
    }
});
