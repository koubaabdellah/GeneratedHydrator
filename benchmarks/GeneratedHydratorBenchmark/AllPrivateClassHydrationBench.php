<?php

namespace GeneratedHydratorBenchmark;

/**
 * Benchmark class that contains only private properties hydration
 *
 * @BeforeMethods({"setUp"})
 */
class AllPrivateClassHydrationBench extends AbstractHydrationBench
{
    public function setUp()
    {
        $this->createHydrator(AllPrivateClass::class);
        $this->createData();
    }

    /**
     * @Revs(100)
     * @Iterations(200)
     */
    public function benchConsume()
    {
        $object = new AllPrivateClass();
        $this->hydrator->hydrate($this->data, $object);
    }
}
