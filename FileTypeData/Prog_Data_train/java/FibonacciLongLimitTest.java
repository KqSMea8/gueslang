package com.bonacci;

import static org.junit.Assert.assertEquals;

import org.junit.Test;

public class FibonacciLongLimitTest {
    private final IFibonacciSequence seq = new CachedRecursiveFibonacciSequence();

    @Test
    public void shouldBeLimitedPositiveWithLongSize() {
        long fibbo = 0L;
        int nth = 0;
        while (fibbo >=0) {
            fibbo = seq.fibonacci(nth);
            if (fibbo < 0) break;
            nth++;
        }
        assertEquals(IFibonacciSequence.MAX_LONG_NTH_FIBO_ELEMENT, nth - 1); // last element before overflow
    }
    
    @Test
    public void shouldBeLimitedNegativeWithLongSize() {
        long fibbo = -1L;
        int nth = -2;
        while (fibbo < 0) {
            fibbo = seq.fibonacci(nth);
            if (fibbo >= 0) break;
            nth -= 2; // checking only negative elements of fibbo series
        }
        assertEquals(IFibonacciSequence.MIN_LONG_NTH_FIBO_ELEMENT, nth + 2); // step beck to element before overflow
    }
}
